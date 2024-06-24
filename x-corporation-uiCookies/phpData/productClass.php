<?php

include_once 'product.php';

class ProductCategory {
    // Properties
    public $title;
    public $imgSrc;
	public $product;

    // Constructor
    public function __construct($title, $img, $productList) {
        $this->title = $title;
        $this->imgSrc = $img;
		$this->product = $productList;
    }

}



?>
