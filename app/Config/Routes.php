<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/coba', 'Home::coba');
$routes->get('/beranda', 'Home::beranda');

$routes->get('/mahasiswa', 'Mahasiswa::index');

$routes->get('/dosen', 'Dosen::index');

$routes->get('/matakuliah', 'Matakuliah::index');

$routes->get('/tentang', 'Home::tentang');
