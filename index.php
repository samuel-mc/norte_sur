<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
#define('__ROOT__', "http://localhost/norte_sur");
define('__ROOT__', "http://localhost/proyectos/Sebas/norte_sur");


Flight::route('/', function () {
    Flight::render('index.php', array('title' => 'Home'));
});

Flight::route('/menu', function () {
    Flight::render('menu.php', array('title' => 'Menú'));
});

Flight::route('/galeria', function () {
    Flight::render('galeria.php', array('title' => 'Galería'));
});

Flight::route('/contacto', function () {
    Flight::render('contacto.php', array('title' => 'Contacto'));
});
#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
