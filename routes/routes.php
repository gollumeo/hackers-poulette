<?php

use Bramus\Router\Router;

$router = new Router();

$router->get('/', function() {
    require_once __DIR__ . '/../views/shared/header.php';
    require_once __DIR__ . '/../views/contactform.php';
    require_once __DIR__ . '/../views/shared/footer.php';
});

$router->post('/contact-form', 'ContactFormController@store');

$router->get('/success', function() {
    require_once __DIR__ . '/../views/shared/header.php';
    require_once __DIR__ . '/views/success.php';
    require_once __DIR__ . '/../views/shared/footer.php';
});

$router->run();
