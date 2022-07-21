<?php

include "./classes/product.classes.php";
include "./classes/book.classes.php";
include "./classes/dvd.classes.php";
include "./classes/furniture.classes.php";

class Main
{
    private $products = array();

    function __construct($result)
    {
        while ($row = mysqli_fetch_assoc($result)) {
            $this->products[] = $this->addRowObject($row);
        }
    }

    private function addRowObject($row)
    {
        $className = ucfirst($row["type"]);
        $row = array_filter($row);
        unset($row["type"]);
        return new $className($row);
    }

    function displayProducts()
    {
        foreach ($this->products as $product) {
            echo '<div class="cont-el"><div class="el-text"><input type="checkbox" class="delete-checkbox" name="deleteSku[]" value="' . $product->getSku() . '"/>';
            $product->render();
            echo '</div></div>';
        }
    }
}
