<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth');
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
$routes->get('/', 'Auth::index');
$routes->get('home', 'Home::index');
$routes->post('login', 'Auth::login');
$routes->get('logout', 'Auth::logout');
$routes->group('pasien', static function ($routes) {
    $routes->get('', 'Admin\Pasien::index');
    $routes->get('add', 'Admin\Pasien::tambah');
    $routes->post('add', 'Admin\Pasien::tambah');
    $routes->get('edit', 'Admin\Pasien::ubah');
    $routes->get('deleted/(:any)', 'Admin\Pasien::hapus/$1');
});
$routes->group('petugas_medis', static function ($routes) {
    $routes->get('', 'Admin\Petugas_Medis::index');
    $routes->get('add', 'Admin\Petugas_Medis::tambah');
    $routes->post('add', 'Admin\Petugas_Medis::tambah');
    $routes->get('edit', 'Admin\Petugas_Medis::ubah');
    $routes->get('deleted/(:any)', 'Admin\Petugas_Medis::hapus/$1');
});
$routes->group('poli', static function ($routes) {
    $routes->get('', 'Admin\Poli::index');
    $routes->get('add', 'Admin\Poli::tambah');
    $routes->post('add', 'Admin\Poli::tambah');
    $routes->get('edit', 'Admin\Poli::ubah');
    $routes->get('deleted/(:any)', 'Admin\Poli::hapus/$1');
});
$routes->group('rekam_medis', static function ($routes) {
    $routes->get('', 'Dokter\Rekam_Medis::index');
    $routes->get('add', 'Dokter\Rekam_Medis::tambah');
    $routes->post('add', 'Dokter\Rekam_Medis::tambah');
    $routes->get('edit', 'Dokter\Rekam_Medis::ubah');
    $routes->get('deleted/(:any)', 'Dokter\Rekam_Medis::hapus/$1');
});
$routes->group('rekam_medis', static function ($routes) {
    $routes->get('', 'Petugas\Rekam_Medis::index');
    $routes->get('add', 'Petugas\Rekam_Medis::tambah');
    $routes->post('add', 'Petugas\Rekam_Medis::tambah');
    $routes->get('edit', 'Petugas\Rekam_Medis::ubah');
    $routes->get('deleted/(:any)', 'Petugas\Rekam_Medis::hapus/$1');
});


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
