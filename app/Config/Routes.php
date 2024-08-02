<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->setDefaultController('Home');

$routes->get('signup', 'Signup::index');

$routes->get('homepage', 'Home::index');

$routes->get('login', 'Login::index');

$routes->get('club_member_dash', 'ClubMemberDashboard::index');
$routes->get('club_member_book', 'Booking::index');
$routes->post('signup/register', 'Signup::register');
$routes->post('login/login', 'Login::login');
$routes->post('appointments/bookAppointment', 'AppointmentsController::bookAppointment');

$routes->get('staff_dash', 'StaffDashboard::index');