<?php

abstract class Product
{
    protected $sku;
    protected $name;
    protected $price;

    function __construct($sku, $name, $price)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
    }

    public function render()
    {
        echo "<p>{$this->sku}</p>";
        echo "<p>{$this->name}</p>";
        echo "<p>{$this->price}$</p>";
    }

    public function getSku()
    {
        return $this->sku;
    }
}
