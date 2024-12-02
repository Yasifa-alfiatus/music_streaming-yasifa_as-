<?php
session_start();
include("../koneksi.php");

if(isset($_POST['simpan'])){
    $judul_lagu = $_POST['judul_lagu'];
    $artis = $_POST['artis'];
    $durasi = $_POST['durasi'];

    $sql = "INSERT INTO lagu
    (judul_lagu, artis, durasi)
    VALUES ('$judul_lagu', '$artis', '$durasi')";

    $query = mysqli_query($db, $sql);
if ($query){
    $_SESSION['notifikasi'] = "Data menu berhasil di simpan!";
} else {
    $_SESSION['notifikasi'] = "Data menu gagal di simpan!";
}
header('Location: index.php');
}else{
    die("Akses di tolak...");
}
?>