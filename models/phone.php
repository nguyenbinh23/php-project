<?php 
namespace NguyenApp\Models;

use NguyenApp\Models\Product;

class Phone extends Product {
    protected $name = 'phone';

    public function getName() {
        return $this->name;
    }

    public function setName( $name ) {
        $this->name = $name;
        return $this;
    }
}

