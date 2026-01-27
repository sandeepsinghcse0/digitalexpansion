<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\Admin_model;
use App\Models\LocalityModel;
use App\Models\TeamModel;
use App\Models\ConfigModel;
use App\Models\ServiceModel;
use App\Models\BookingModel;
use App\Models\ContactModels;
use App\Models\Visiters;
use App\Models\JobApplicationModel;

class Home extends BaseController
{
    protected $base_url;
    protected $localityModel;
    protected $team_list;
    protected $app_data;
    protected $services_list;
    public function initController(
        RequestInterface $request,
        ResponseInterface $response,
        LoggerInterface $logger,
    ) {
        parent::initController($request, $response, $logger);
        $localityModel = new LocalityModel();
        $teamModel = new TeamModel ();
        $configModel = new ConfigModel();
        $serviceModel = new ServiceModel();
        $contanctModels = new ContactModels();
        $visters = new Visiters();
        $this->servideModel = $serviceModel;
        $this->contanctModels = $contanctModels;
        $this->visters = $visters;
        $this->city_list = $localityModel->getLocalities();
        $this->team_list = $teamModel->getTeams();
        $this->base_url = getenv('baseurl');
        $this->app_data = $configModel->getConfig();
        $this->services_list = $serviceModel->getServices();
        $this->blogPosts = [
        ];
    }
    public function index(): string
    {
        $visiter = ["visitor_ip" => $this->request->getIPAddress(), "page" => "Home"];
        $this->visters->save($visiter);
        $this->data['city_list'] = $this->city_list;
        $this->data['team_list'] = $this->team_list;
        $this->data['app_data'] = $this->app_data;
        $this->data['base_url'] = $this->base_url;
        $this->data['services_list'] = $this->services_list;
        return view('home', $this->data);
    }

    public function about(): string
    {
        $visiter = ["visitor_ip" => $this->request->getIPAddress(), "page" => "About"];
        $this->visters->save($visiter );
        $this->data['breadcrumb'] = 'About';
        $this->data['app_data'] = $this->app_data;
        $this->data['base_url'] = $this->base_url;
        $this->data['city_list'] = $this->city_list;
        $this->data['team_list'] = $this->team_list;
        $this->data['services_list'] = $this->services_list;
        return view('about', $this->data);
    }



    public function blogs(): string
    {
        $this->data['breadcrumb'] = 'About';
        $visiter = ["visitor_ip" => $this->request->getIPAddress(), "page" => "Blogs"];
        $this->visters->save($visiter );
        $this->data['breadcrumb'] = 'About';
        $this->data['app_data'] = $this->app_data;
        $this->data['base_url'] = $this->base_url;
        $this->data['city_list'] = $this->city_list;
        $this->data['team_list'] = $this->team_list;
        $this->data['services_list'] = $this->services_list;

        $this->data['posts'] = $this->blogPosts;
        return view('blogs', $this->data);
    }

     // View a single blog by slug
    public function read($slug)
    {
        $visiter = ["visitor_ip" => $this->request->getIPAddress(), "page" => $slug];
        $this->visters->save($visiter );
        $this->data['breadcrumb'] = 'About';
        $this->data['app_data'] = $this->app_data;
        $this->data['base_url'] = $this->base_url;
        $this->data['city_list'] = $this->city_list;
        $this->data['team_list'] = $this->team_list;
        $this->data['services_list'] = $this->services_list;
        foreach ($this->blogPosts as $post) {
            if ($post['slug'] === $slug) {
                $this->data['post'] = $post['slug'];
                return view($post['view'], $this->data);
            }
        }

        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Blog post not found.");
    }

    public function contact(): string
    {
        $visiter = ["visitor_ip" => $this->request->getIPAddress(), "page" => "Contact"];
        $this->visters->save($visiter );
        $this->data['breadcrumb'] = 'About';
        $this->data['app_data'] = $this->app_data;
        $this->data['base_url'] = $this->base_url;
        $this->data['city_list'] = $this->city_list;
        $this->data['team_list'] = $this->team_list;
        $this->data['services_list'] = $this->services_list;
        return view('contact', $this->data);
    }

    public function saveBooking()
    {
        $response = ['success' => false, 'response' => ''];
        $postedData = $this->request->getPost();
        helper('system');

        $bookingModel = new BookingModel();
        if ($bookingModel->insertBooking($postedData)) {
            $service = $this->servideModel->getService($postedData['service_id']);

            $emailData = [
                'title' => 'One Booking Received',
                'footer_text' => "",
                'data_list' => [
                    'Full Name'        => $postedData['name'],
                    'Phone Number'     => $postedData['phone_number'],
                    'Email Address'    => !empty($postedData['email']) ? $postedData['email'] : 'N/A',
                    'Address'          => $postedData['address'],
                    'Service Type'     => $service->name ?? 'NA',
                    'Appointment Date' => $postedData['booking_date']
                ]
            ];

            // Render email view
            $view = \Config\Services::renderer();
            $body = $view->setData($emailData)->render('email_template');

            // Send admin mail
            send_mail('Digital Expansion Pvt Ltd| We will get in touch ASAP', $body);

            // Send confirmation mail to user if email provided
            if (!empty($postedData['email'])) {
                $emailData['title'] = "Your Booking Details";
                $emailData['footer_text'] = "*We will connect shortly";
                $body = $view->setData($emailData)->render('email_template');
                send_mail('Digital Expansion Pvt Ltd| We will get in touch ASAP', $body, $postedData['email']);
            }

            $response['success'] = true;
            $response['response'] = "Booking created successfully.";
        } else {
            $response['response'] = "Internal server error!";
        }

        return $this->response->setJSON($response);
    }

     public function saveContact()
    {
        $return = ['success' => false, 'response' => ''];
        $posted_data = $this->request->getPost();
        helper('system');

        if ($this->contanctModels->insertContact($posted_data) && $posted_data['email']) {
            $email_data = [
                'title' => 'One Enquiry Received',
                'footer_text' => "",
                'data_list' => [
                    'Full Name' => $posted_data['name'],
                    'Email Address' => $posted_data['email'],
                    'Subject' => $posted_data['subject'],
                    'Message' => $posted_data['message']
                ]
            ];

            // Load view and render email body
            $body = view('email_template', $email_data);

            // Send the mail
            send_mail('Digital Expansion Pvt Ltd| We will get in touch ASAP', $body, $posted_data['email']);

            $return['success'] = true;
            $return['response'] = "Your Query Sent successfully.";
        } else {
            $return['response'] = "Internal server error!";
        }

        return $this->response->setJSON($return);
    }

    public function career()
    {
        $visiter = ["visitor_ip" => $this->request->getIPAddress(), "page" => "Contact"];
        $this->visters->save($visiter );
        $this->data['breadcrumb'] = 'About';
        $this->data['app_data'] = $this->app_data;
        $this->data['base_url'] = $this->base_url;
        $this->data['city_list'] = $this->city_list;
        $this->data['team_list'] = $this->team_list;
        $this->data['services_list'] = $this->services_list;
        return view('career', $this->data);
    }

    public function apply()
    {
        helper('system');
        $jobApplicationModel = new JobApplicationModel();
        $data = [
            'name'     => $this->request->getPost('name'),
            'email'    => $this->request->getPost('email'),
            'phone'    => $this->request->getPost('phone'),
            'position' => $this->request->getPost('position'),
        ];
        $emailData = [
            'title' => 'CritiHome | Job Appliaction Recieved',
            'footer_text' => "",
            'data_list' => $data
        ];

        $jobApplicationModel->insertJobApplication($data);
        $view = \Config\Services::renderer();
        $body = $view->setData($emailData)->render('email_template');
        // Send the mail
        send_mail('Digital Expansion Pvt Ltd| We will get in touch ASAP', $body);
        // Here you can insert to DB or send an email
        return redirect()->to(base_url('/career'))->with('message', 'Application submitted successfully!');
    }

    public function services()
    {
        $visiter = ["visitor_ip" => $this->request->getIPAddress(), "page" => "Home"];
        $this->visters->save($visiter);
        $this->data['city_list'] = $this->city_list;
        $this->data['team_list'] = $this->team_list;
        $this->data['app_data'] = $this->app_data;
        $this->data['base_url'] = $this->base_url;
        $this->data['services_list'] = $this->services_list;
        $this->data['breadcrumb'] = 'Services';
        $this->data['page_title'] = 'Our Services';     
        $serviceModel = new ServiceModel();
        $services = $serviceModel->getServices();
        $this->data['services'] = $services;
        return view('services', $this->data);
    }
}
