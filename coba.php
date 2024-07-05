<?php
// Koneksi ke database (ganti nilai-nilai berikut sesuai dengan pengaturan server Anda)
$host = 'localhost';
$username = 'username';
$password = 'password';
$database = 'nama_database';

$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $type = $_POST['type'];
    $product = $_POST['product'];
    $cust_produk = $_POST['cust_produk'];
    $qty = $_POST['qty'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];

    // Query untuk menyimpan data ke database
    $sql = "INSERT INTO products (type, product, cust_produk, qty, unit, price) VALUES ('$type', '$product', '$cust_produk', '$qty', '$unit', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "Produk berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <h2>Tambah Produk Baru</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="type">Tipe Produk:</label><br>
        <input type="text" name="type"><br>

        <label for="product">Nama Produk:</label><br>
        <input type="text" name="product"><br>

        <label for="cust_produk">Pelanggan Produk:</label><br>
        <input type="text" name="cust_produk"><br>

        <label for="qty">Jumlah:</label><br>
        <input type="number" name="qty"><br>

        <label for="unit">Unit:</label><br>
        <input type="text" name="unit"><br>

        <label for="price">Harga:</label><br>
        <input type="number" name="price"><br><br>

        <input type="submit" value="Tambah Produk">
    </form>
</body>
</html>
