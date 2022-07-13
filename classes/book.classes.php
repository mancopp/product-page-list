<?php

class Book extends Product
{
    private $weight;

    function __construct($sku, $name, $price, $weight)
    {
        parent::__construct($sku, $name, $price);
        $this->weight = $weight;
    }

    public function render()
    {
        parent::render();
        echo "<p>Weight: {$this->weight}KG</p>";
    }
}
