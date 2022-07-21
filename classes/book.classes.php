<?php

class Book extends Product
{
    private $weight;

    function __construct($arr)
    {
        parent::__construct($arr);
        $this->weight = $arr["weight"];
    }

    public function render()
    {
        parent::render();
        echo "<p>Weight: {$this->weight}KG</p>";
    }
}
