<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form method="POST" action="cek.php">
        <input type="text" name="nama" placeholder="isikan nama anda"><br/>
        <textarea name="alamat" placeholder="a"></textarea><br/>
        <input type="text" name="tempat" placeholder="isikan tempat anda"><br/>
        <select name="jenis_kelamin">
            <option value="L">Lagi-laki</option>
            <option value="P">Perempuan</option>
        </select><br/>
        <input type="number" name="usia" placeholder="isikan usia anda"><br/>
        <input type="submit" name="submit" value="simpan">
    </form>
    <?php
        echo @$_POST['nama'];
        echo "<br/>";
        echo @$_POST['submit'];
    ?>
</body>
</html>

<!-- 
    form
    - method : post dan get
    - action : tujuan
-->