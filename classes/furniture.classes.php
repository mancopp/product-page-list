<?php

class Furniture extends Product
{
    private $dimensions;


    function __construct($sku, $name, $price, $dimensions)
    {
        parent::__construct($sku, $name, $price);
        $this->dimensions = $dimensions;
    }

    public function render()
    {
        parent::render();

        echo "<p>Dimensions: {$this->dimensions}</p>";
    }
}
