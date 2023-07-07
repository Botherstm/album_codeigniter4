<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


//pages
$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/album', 'Pages::album');
$routes->get('/contact', 'Pages::contact');


//admin
$routes->get('/admin', 'Admin::index');

//album admin
$routes->get('/admin/pages/album', 'Album::index');
$routes->get('/admin/pages/album/add', 'Album::add');
$routes->post('/admin/pages/album/save', 'Album::save');
$routes->get('/admin/pages/album/detail/(:segment)', 'Album::detail/$1');
$routes->get('/admin/pages/album/edit/(:segment)', 'Album::edit/$1');
$routes->post('/admin/pages/album/update/(:segment)', 'Album::update/$1');
$routes->post('/admin/pages/album/delete/(:segment)', 'Album::delete/$1');




/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}