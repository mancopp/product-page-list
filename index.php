<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product List</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <header>
        <h2>Product List</h2>
        <div class="btn-container">
            <a href="./addproduct.php"><button>ADD</button></a>
            <button form="main-form" type="submit" name="delete" id="delete-product-btn">MASS DELETE</button>
        </div>
    </header>
    <form id="main-form" method="POST">
        <main>
            <div class="content-container">
                <?php
                include "./inc/header.php";

                $main = new Main($db->executeStatement("SELECT * FROM `products`"));
                $main->displayProducts();
                ?>
            </div>
        </main>
        <footer>
            <h4>Marian Hasyak, test assignment</h4>
        </footer>
    </form>
</body>

</html>