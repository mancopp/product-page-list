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
            switch ($row["type"]) {
                case "book":
                    $this->products[] = new Book($row["sku"], $row["name"], $row["price"], $row["weight"]);
                    break;
                case "dvd":
                    $this->products[] = new Dvd($row["sku"], $row["name"], $row["price"], $row["size"]);
                    break;
                case "furniture":
                    $this->products[] = new Furniture($row["sku"], $row["name"], $row["price"], $row["dimensions"]);
                    break;
            }
            echo "<br/>";
        }
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
