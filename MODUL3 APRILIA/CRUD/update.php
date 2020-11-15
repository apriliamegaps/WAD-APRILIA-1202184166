<?php

include '../connection.php';

if (isset($_POST)) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];
    $tanggal = $_POST['tanggal'];
    $mulai = $_POST['mulai'];
    $berakhir = $_POST['berakhir'];
    $tempat = $_POST['tempat'];
    $harga = $_POST['harga'];
    $benefit = $_POST['benefit'];
    // $benefit = implode(",", $_POST['benefit']);
    $gambar = date('dmYHis') . str_replace(" ", "", basename($_FILES['gambar']['name']));
    $gambarPath = "../gambar/" . $gambar;
    move_uploaded_file($_FILES['gambar']['tmp_name'], $gambarPath);

    $nambah = mysqli_query($koneksi, "update event set name ='$name', deskripsi = '$deskripsi', gambar = '$gambar', tanggal = '$tanggal',
    mulai = '$mulai', berakhir = '$berakhir', tempat = '$tempat', harga = '$harga', benefit = '$benefit' Where id='$id'");

    if ($nambah) {
        header('location:../tampilan/index.php');
    } else {
        echo "Gagal Nama = $name, Desk =  $deskripsi, <br> kategori = $kategori, tanggal = $tanggal,  mulai = $mulai, berakhir = $berakhir, tempat = $tempat, harga = $harga, benefit = $benefit, gambar = $gambar ";
    }
}
