<?php
require 'function.php';

//jika tidak ada id di url 

if(!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

//ambil id dari url

$id= $_GET['id'];

//query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");


//cek apakah tombol sudah ditekan
if(isset($_POST['ubah'])){
    if(ubah($_POST) > 0) {
        echo "<script>
        alert('Data berhasil diubah!');
        document.location.href = 'index.php';
    </script>";;
    }else {
        echo "data gagal diubah!";
    }
}





?>
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah data mahasiswa</title>
</head>
<body>
    <h3>form ubah data mahasiswa</h3>
    <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $m['id'] ?>">
        <ul>
            <li>
                <label for="">
                    NRP :
                    <input type="text" name="nrp" required value="<?= $m['nrp'] ?>">
                </label>
            </li>
            <li>
                <label for="">
                    Nama :
                    <input type="text" name="nama" required value="<?= $m['nama'] ?>">
                </label>
            </li>
            <li>
                <label for="">
                    Email :
                    <input type="text" name="email" required value="<?= $m['email'] ?>">
                </label>
            </li>
            <li>
                <label for="">
                    Jurusan:
                    <input type="text" name="jurusan" required value="<?= $m['jurusan'] ?>">
                </label>
            </li>
            <li>
                <label for="">
                    Img :
                    <input type="text" name="img" required value="<?= $m['img'] ?>">
                </label>
            </li>
            <li><button type="submit" name="ubah">Ubah Data!</button></li>
        </ul>
    
    </form>
</body>
</html>