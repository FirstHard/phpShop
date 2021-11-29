<?php
    class Product {

        public $product_id;
        public $articule;
        public $product_price;
        public $image;
        public $name;
        public $alias;
        public $short_description;
        public $description;

        public function __construct(array &$product) {
            extract($product);
            $this->product_id = $product_id;
            $this->articule = $articule;
            $this->product_price = $product_price;
            $this->image = $image;
            $this->name = $name;
            $this->alias = $alias;
            $this->short_description = $short_description;
            $this->description = $description;
        }
    }