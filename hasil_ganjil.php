<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row">
<td>
<label for="typeproduct">typeproduct  :</label><?= $_POST["typeproduct"];?>
<div class="row">
<label for="product">product  :</label> <?= $_POST["product"];?>
<div class="row">
<label for="cust_product_code">cust product code  :</label><?= $_POST["cust_product_code"];?>
<div class="row">
<label for="Qty">Qty  :</label><?= $_POST["qty"];?>
<div class="row">
<label for="unit">unit  :</label> <?= $_POST["unit"];?>
<div class="row">
<label for="price">price  :</label> <?= $_POST["price"];?>
<div class="row">
<label for="subtotal">subtotal  :</label> <?= $_POST["subtotal"];?>
</td>
</body>
</html>