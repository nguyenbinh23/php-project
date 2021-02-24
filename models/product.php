<?php 
namespace NguyenApp\Models;

class Product {
    protected $name = 'product';

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }
}