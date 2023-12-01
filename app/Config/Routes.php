<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('index', 'Home::index');
$routes->get('product', 'Home::product');
$routes->get('blog', 'Home::blog');
$routes->get('akses', 'Home::akses');
$routes->get('detailview/(:segment)', 'Home::view/$1');
$routes->get('hubungisaya', 'Home::hubungisaya');
$routes->post('contact/sendEmail', 'Home::sendEmail');

 //File: app/Config/Routes.php
$routes->set404Override(function(){
    return view('errors/404');
});

$routes->get('tentangsaya', 'UserController::profile');
$routes->post('user/updateProfile', 'UserController::updateProfile');

$routes->get('login', 'Auth::login'); // Rute untuk halaman login
$routes->get('auth/login', 'Auth::login'); // Rute untuk halaman login
$routes->post('auth/login', 'Auth::login'); // Rute untuk proses login (POST request)

$routes->get('register', 'Auth::register'); // Rute untuk halaman register
$routes->post('auth/register', 'Auth::register'); // Rute untuk proses registrasi (POST request)
$routes->get('auth/logout', 'Auth::logout');

$routes->get('forgot_password', 'Auth::forgotPassword');
$routes->post('auth/forgotPassword', 'Auth::forgotPassword');
$routes->get('reset_password/(:segment)', 'Auth::resetPassword/$1');
$routes->post('auth/processResetPassword', 'Auth::processResetPassword');


$routes->get('source_code', 'SourceCode::index');
$routes->get('source_code/create', 'SourceCode::create');
$routes->post('source_code/store', 'SourceCode::store');
$routes->get('source_code/edit/(:num)', 'SourceCode::edit/$1');
$routes->post('source_code/update', 'SourceCode::update');
$routes->get('source_code/delete/(:num)', 'SourceCode::delete/$1');


// Rute untuk menampilkan daftar testimoni
$routes->get('testimoni', 'Testimoni::index');
$routes->get('testimoni/create', 'Testimoni::create');
$routes->post('testimoni/store', 'Testimoni::store');
$routes->get('testimoni/edit/(:num)', 'Testimoni::edit/$1');
$routes->post('testimoni/update/(:num)', 'Testimoni::update/$1');
$routes->get('testimoni/delete/(:num)', 'Testimoni::delete/$1');

$routes->get('blog/index', 'Blog::index');
$routes->get('blog/create', 'Blog::create');
$routes->post('blog/store', 'Blog::store');
$routes->get('blog/edit/(:num)', 'Blog::edit/$1');
$routes->post('blog/update/(:num)', 'Blog::update/$1');
$routes->get('blog/delete/(:num)', 'Blog::delete/$1');

// app/config/Routes.php

$routes->get('admin/login', 'Admin::login');
$routes->post('admin/doLogin', 'Admin::doLogin');
$routes->get('admin/logout', 'Admin::logout');