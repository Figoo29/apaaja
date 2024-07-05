<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <center>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $type_product = $_POST["type_product"];
        $product = $_POST["product"];
        $cost_product_code = $_POST["cost_product_code"];
        $qty = $_POST["qty"];
        $price = $_POST["price"];

        echo "<table border='1'>";
        echo "<tr><th colspan='2'>Submitted Product Information</th></tr>";
        echo "<tr><td>Type product:</td><td>$type_product</td></tr>";
        echo "<tr><td>Product Name:</td><td>$product</td></tr>";
        echo "<tr><td>Cost Product Code:</td><td>$cost_product_code</td></tr>";
        echo "<tr><td>Quantity:</td><td>$qty</td></tr>";
        echo "<tr><td>Price:</td><td>$price</td></tr>";
        echo "</table>";
    }
    ?>
    </center>
</body>
</html>