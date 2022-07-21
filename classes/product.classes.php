<?php

abstract class Product
{
    protected $sku;
    protected $name;
    protected $price;

    function __construct($arr)
    {
        $this->sku = $arr["sku"];
        $this->name = $arr["name"];
        $this->price = $arr["price"];
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
