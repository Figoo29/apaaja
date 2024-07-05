<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="register.php" method="post">
        <label for="username">Nama:</label><br>
        <input type="text" id="username" name="username"><br><br>
        
        <label for="alamat">Alamat:</label><br>
        <input type="alamat" id="alamat" name="alamat"><br><br>
        
        <label for="tempat lahir">tempat lahir:</label><br>
        <input type="tempat lahir" id="tempat lahir" name="tempat lahir"><br><br>
    
        <label for="tgl lahir">tgl lahir:</label><br>
        <input type="tgl lahir" id="tgl lahir" name="tgl lahir"><br><br>

        <label for="gender">jenis kelamin:</label><br>
        <input type="radio" id="laki laki" name="gender" value="laki laki">
        <label for="laki laki">laki laki</label>
        <input type="radio" id="perempuan" name="gender" value="perempuan">
        <label for="perempuan">perempuan</label><br><br>

        <label for="pendidikan">Pendidikan:</label><br>
    <select id="pendidikan" name="pendidikan">
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="S1">S1</
    </select><br><br>

        
        <input type="submit" value="simpan">
        <input type="reset" value="batal">
    </form>
</body>
</html>
