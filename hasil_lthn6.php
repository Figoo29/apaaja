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
        <input type="text" id="alamat" name="alamat"><br><br>
        
        <label for="tempat_lahir">Tempat Lahir:</label><br>
        <input type="text" id="tempat_lahir" name="tempat_lahir"><br><br>
    
        <label for="tgl_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tgl_lahir" name="tgl_lahir"><br><br>

        <label for="gender">Jenis Kelamin:</label><br>
        <input type="radio" id="laki_laki" name="gender" value="laki_laki">
        <label for="laki_laki">Laki-laki</label>
        <input type="radio" id="perempuan" name="gender" value="perempuan">
        <label for="perempuan">Perempuan</label><br><br>

        <label for="pendidikan">Pendidikan:</label><br>
        <select id="pendidikan" name="pendidikan">
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="S1">S1</option>
        </select><br><br>

        <input type="submit" value="Simpan">
        <input type="reset" value="Batal">
    </form>
</body>
</html>
