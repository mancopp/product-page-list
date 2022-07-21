<?php

class Dvd extends Product
{
    private $size;

    function __construct($arr)
    {
        parent::__construct($arr);
        $this->size = $arr["size"];
    }

    public function render()
    {
        parent::render();
        echo "<p>Size: {$this->size}MB</p>";
    }
}
