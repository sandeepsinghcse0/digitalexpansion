<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('desk', 'Desk::index');
$routes->get('execute/(:any)', 'Desk::execute/$1');
$routes->get('about', 'Home::about');
$routes->get('instruments', 'Home::instruments');
$routes->get('teams', 'Home::teams');
$routes->get('blogs', 'Home::blogs');
$routes->get('blogs/(:segment)', 'Home::read/$1');
$routes->get('contact', 'Home::contact');
$routes->post('save_booking', 'Home::saveBooking');
$routes->post('save_contact', 'Home::saveContact');
$routes->get('career', 'Home::career');
$routes->post('career/apply', 'Home::apply');
$routes->get('services', 'Home::services');

// 404 override (optional handler)
$routes->set404Override();

// URI dashes translation
$routes->setTranslateURIDashes(false);

