<?php
//dipanggil function
require 'function.php';

//cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["tambah"])){
    //cek apakah data berhasil di tambahkan atau tidak 
    if (tambah($_POST) > 0){
        echo"
        <script>
        alert('data telah berhasil di tambah!');
        document.location.href = 'index.php'
        </script>
        ";
    } else {
        echo"
        <script>
        alert('data telah gagal di tambah!');
        document.location.href = 'index.php'
        </script>
        ";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">Nim</label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
            <label for="nama">Nama</label>
                <input type="text" name="nama" id="nim" required>
            </li>
            <li>
            <label for="email">Email</label>
                <input type="text" name="email" id="nim" required>
            </li>
            <li>
            <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="nim" required>
            </li>
            <li>
            <label for="gambar">gambar</label>
                <input type="file" name="gambar" id="nim" required>
            </li>
            <li>
                <button type="submit" name="tambah">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>