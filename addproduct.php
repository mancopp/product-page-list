<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Add</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <header>
        <h2>Product Add</h2>
        <div class="btn-container">
            <button form="product_form" type="submit" name="Save">SAVE</button>
            <a href="./index.php"><button>CANCEL</button></a>
        </div>
    </header>
    <main>
        <?php
        include "./inc/header.php";
        ?>
        <form id="product_form" method="POST">
            <div class="form-container">
                <table class="form-table">
                    <tr>
                        <td><label>SKU</label></td>
                        <td><input type="text" name="sku-in" id="sku" /></td>
                    </tr>
                    <tr>
                        <td><label>Name</label></td>
                        <td><input type="text" name="name-in" id="name" /></td>
                    </tr>
                    <tr>
                        <td><label>Price</label></td>
                        <td><input type="text" name="price-in" id="price" /></td>
                    </tr>
                    <tr>
                        <td><label>Type Switcher</label></td>
                        <td>
                            <select name="sel-in" id="productType" onchange="selectFunc()" onload="selectFunc()">
                                <option value="DVD">DVD</option>
                                <option value="Book">Book</option>
                                <option value="Furniture">Furniture</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="form-container dvd">
                <table class="form-table">
                    <tr>
                        <td><label>Size (MB)</label></td>
                        <td><input type="text" name="size-in" id="size" /></td>
                    </tr>
                </table>
                <p>Please, provide size.</p>
            </div>
            <div class="form-container furniture">
                <table class="form-table">
                    <tr>
                        <td><label>Height (CM)</label></td>
                        <td><input type="text" name="height-in" id="height" /></td>
                    </tr>
                    <tr>
                        <td><label>Width (CM)</label></td>
                        <td><input type="text" name="width-in" id="width" /></td>
                    </tr>
                    <tr>
                        <td><label>Length (CM)</label></td>
                        <td><input type="text" name="length-in" id="length" /></td>
                    </tr>
                </table>
                <p>Please, provide dimensions.</p>
            </div>
            <div class="form-container book">
                <table class="form-table">
                    <tr>
                        <td><label>Weight (KG)</label></td>
                        <td><input type="text" name="weight-in" id="weight" /></td>
                    </tr>
                </table>
                <p>Please, provide weight.</p>
            </div>
        </form>
    </main>
    <script src="./addproduct.js"></script>
</body>

</html>