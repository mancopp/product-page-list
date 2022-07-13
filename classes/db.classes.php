<?php

class DatabaseClass
{
    public function __construct($dbhost = "localhost", $dbname = "product_list", $username = "root", $password = "")
    {
        try {
            $this->connection = mysqli_connect($dbhost, $username, $password, $dbname);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function executeStatement($statement)
    {
        try {
            return mysqli_query($this->connection, $statement);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function handleBtn()
    {
        if (isset($_POST["delete"]) && isset($_POST["deleteSku"])) {
            foreach ($_POST["deleteSku"] as $sku) {
                $this->executeStatement("DELETE FROM `products` WHERE `sku` = '${sku}'");
            }
            header("Location: index.php");
        }

        if (isset($_POST["save"])) {
            $defaultAreValid = true;
            if (empty($_POST["sku-in"]) || strlen($_POST["sku-in"]) != 8) {
                echo "Invalid sku! ";
                $defaultAreValid = false;
            }
            if (empty($_POST["name-in"])) {
                echo "Invalid name! ";
                $defaultAreValid = false;
            }
            if (empty($_POST["price-in"]) || !filter_input(INPUT_POST, "price-in", FILTER_VALIDATE_FLOAT)) {
                echo "Invalid price! ";
                $defaultAreValid = false;
            }

            if ($defaultAreValid) {
                switch ($_POST["sel-in"]) {
                    case "dvd":
                        if (empty($_POST["size-in"]) || !filter_input(INPUT_POST, "size-in", FILTER_VALIDATE_INT)) echo "Invalid size! ";
                        else {
                            $this->executeStatement("INSERT INTO `products` (`sku`, `name`, `price`, `type`, `size`) VALUES ('" . $_POST["sku-in"] . "', '" . $_POST["name-in"] . "', " . $_POST["price-in"] . ", 'dvd', " . $_POST["size-in"] . ")");
                            header("Location: index.php");
                        }
                        break;
                    case "book":
                        if (empty($_POST["weight-in"]) || !filter_input(INPUT_POST, "weight-in", FILTER_VALIDATE_INT)) echo "Invalid weight! ";
                        else {
                            $this->executeStatement("INSERT INTO `products` (`sku`, `name`, `price`, `type`, `weight`) VALUES ('" . $_POST["sku-in"] . "', '" . $_POST["name-in"] . "', " . $_POST["price-in"] . ", 'book', " . $_POST["weight-in"] . ")");
                            header("Location: index.php");
                        }
                        break;
                    case "furniture":
                        if (empty($_POST["height-in"]) || !filter_input(INPUT_POST, "height-in", FILTER_VALIDATE_FLOAT)) echo "Invalid height! ";
                        else if (empty($_POST["width-in"]) || !filter_input(INPUT_POST, "width-in", FILTER_VALIDATE_FLOAT)) echo "Invalid width! ";
                        else if (empty($_POST["length-in"]) || !filter_input(INPUT_POST, "length-in", FILTER_VALIDATE_FLOAT)) echo "Invalid length! ";
                        else {
                            $this->executeStatement("INSERT INTO `products` (`sku`, `name`, `price`, `type`, `dimensions`) VALUES ('" . $_POST["sku-in"] . "', '" . $_POST["name-in"] . "', " . $_POST["price-in"] . ", 'furniture', '" . $_POST["height-in"] . "x" . $_POST["width-in"] . "x" . $_POST["length-in"] . "')");
                            header("Location: index.php");
                        }
                        break;
                }
            }
        }
    }
}
