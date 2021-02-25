<?php

use NguyenApp\Models\Phone;
use NguyenApp\Models\Product;

$router = new \Klein\Klein();

$router->respond('GET', '/', function () {
    return 'home';
});

$router->respond('GET', '/hello-world', function () {
    $phone = new Phone;
    $product = new Product;
    $variables1 = [
        $phone->getName(),
        $product->getName(),
        $phone->getName2(),
        $product->getName2(),
        $phone->getGoogleName(),
        $product->getGoogleName(),
        $phone->getGoogleName2(),
        $product->getGoogleName2(),
    ];
    $phoneCode = $phone->getCode();
    $class1 = $phone->setName('Phone Static');
    $class2 = $product->setName('Product Static');
    $class3 = $phone->setName2('Phone Static');
    $class4 = $product->setName2('Product Static');
    $getPhoneCode1 = $phone->getCode();
    $getPhoneCode2 = $phone->getCode2();
    $getPhoneCode3 = $phone->getCode3();
    $getProductCode1 = $product->getCode();
    $getProductCode2 = $product->getCode2();
    $getProductCode3 = $product->getCode3();
    $variables2 = [
        $class1,
        $class2,
        $class3,
        $class4,
        $phoneCode,
        $getPhoneCode1,
        $getPhoneCode2,
        $getPhoneCode3,
        $getProductCode1,
        $getProductCode2,
        $getProductCode3
    ];
    return var_dump($variables1, $variables2);
});

$router->respond('GET', '/alibaba', function () {
    return 'alibaba';
});

$router->dispatch();
