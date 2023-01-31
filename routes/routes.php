<?php
namespace App\routes;
require_once '../core/Helper.php';
require_once '../vendor/autoload.php';



use Bramus\Router\Router;
use App\controllers\ContactFormController;

$router = new Router();

$router->get('/', function() {
    require_once '../views/shared/header.php';
    require_once '../views/contactform/form.php';
    require_once '../views/shared/footer.php';
});

$router->post('/contact-form', function () {
    (new ContactFormController)->create();
});

$router->post('/contact-form', function() {
    require_once '../views/shared/header.php';
    require_once '../views/contactform/success.php';
    require_once '../views/shared/footer.php';
});

//$router->post('/success', function() {
//    require_once __DIR__ . '/../views/shared/header.php';
//    require_once __DIR__ . '/../views/contactform/success.php';
//    require_once __DIR__ . '/../views/shared/footer.php';
//});

$router->run();
