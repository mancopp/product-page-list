<?php

class Dvd extends Product
{
    private $size;

    function __construct($sku, $name, $price, $size)
    {
        parent::__construct($sku, $name, $price);
        $this->size = $size;
    }

    public function render()
    {
        parent::render();
        echo "<p>Size: {$this->size}MB</p>";
    }
}
