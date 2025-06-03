<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->get('/login','Auth::login');
$routes->post('/login', 'Auth::doLogin');
$routes->get('/logout', 'Auth::logout');
$routes->group('', ['filter' => 'authfilter'], function ($routes) {
    $routes->get('/index', 'buku::index');
    $routes->get('/buku', 'buku::index');
    $routes->get('/buku/create', 'buku::create');
    $routes->post('/buku/save', 'buku::save');
    $routes->get('/buku/edit/(:num)', 'buku::edit/$1');
    $routes->post('/buku/update/(:num)', 'buku::update/$1');
    $routes->post('/buku/delete/(:num)', 'buku::delete/$1');
});