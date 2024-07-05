<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>ADD PROCUCT</h2>
    <form action="hasil_ganjil.php" method="post">
    <div class="row">
    <label for="typeproduct">Type product :</label>
        <select id="typeproduct" name="typeproduct">
        <option value="pilih"></option>
        <option value="batik">batik</option>
        <option value="kemeja">kemeja</option>
        <option value="kaos">kaos</option>
    </select>
    </div>
    
    <div class="row">
        <label for="product">product  :</label>
            <select id="product" name="product">
            <option value="celana">celana</option>
            <option value="sepatu">sepatu</option>
            <option value="sendal">sendal</option>
            </select>
        </br>
    </div>
    <div class="row">
			<label for="cust product code">Cust Product Code :</label>
			<input type="text" name="cust_product_code"/>
		</div>
    <div class="row">
			<label for="Qty">Qty :</label>
			<input type="text" name="qty"/>
		</div>
    <div class="row">
        <label for="Unit">Unit  :</label>
            <select id="Unit" name="unit">
            <option value="-">-</option>
            <option value="100">100</option>
            <option value="150">150</option>
            <option value="200">200</option>
            </select>
    </div>
    <div class="row">
			<label for="Price">Price :</label>
			<input type="text" name="price"/>
		</div>
    
    <div class="row">
			<label for="Subtotal">Subtotal :</label>
			<input type="text" name="subtotal"/>
		</div>
    <input type="submit" value="<- back">
    <input type="submit" value="save & add more">
    <input type="submit" value="save">
</body>
</html>