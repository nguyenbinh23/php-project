<?php

use NguyenApp\Models\Phone;

require_once '../vendor/autoload.php';

$router = new \Klein\Klein();

$router->respond('GET','/hello-world',function() {

    $phone = new Phone;


    return $phone->getName();
});

$router->respond('GET','/alibaba',function() {
    return 'alibaba';
});

$router->dispatch();