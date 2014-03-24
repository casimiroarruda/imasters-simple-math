<?php
require '../vendor/autoload.php';
/* default scale to use on BC operations */
bcscale(10);

$router = new Respect\Rest\Router;
$router->get('/add/*/*','\\iMasters\\SimpleMath\\Context\\Addition');
$router->get('/sub/*/*','\\iMasters\\SimpleMath\\Context\\Subtraction');
$router->get('/mul/*/*','\\iMasters\\SimpleMath\\Context\\Multiplication');
$router->get('/div/*/*','\\iMasters\\SimpleMath\\Context\\Division');
$router->get('/mod/*/*','\\iMasters\\SimpleMath\\Context\\Modulus');
$router->get('/pow/*/*','\\iMasters\\SimpleMath\\Context\\Power');
$router->get('/sqrt/*/*','\\iMasters\\SimpleMath\\Context\\SquareRoot');
$router->any('/**',function($params = []){
    header('HTTP/1.0 400 Bad Request');
    return 'Your request can\'t be resolved - your parameters or method are incorrect';
});
