<?php

class Furniture extends Product
{
    private $dimensions;

    function __construct($arr)
    {
        parent::__construct($arr);
        $this->dimensions = $arr["dimensions"];
    }

    public function render()
    {
        parent::render();

        echo "<p>Dimensions: {$this->dimensions}</p>";
    }
}
