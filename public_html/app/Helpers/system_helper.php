<?php
use CodeIgniter\Email\Email;

if (!function_exists('send_mail')) {
    function send_mail($subject, $body, $to = "")
    {
        $emailTo = !empty($to) ? $to : 'critihome@gmail.com';
        $email = \Config\Services::email();
        $email->setTo([$emailTo, 'sandeepsinghcse0@gmail.com']);
        $email->setFrom('info@critihome.in', 'Critihome');
        $email->setSubject($subject);
        $email->setMessage($body);
        $email->send();
    }
}
