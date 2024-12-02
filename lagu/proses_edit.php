<?php

session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $lagu_id = $_POST['lagu_id'];
    $judul_lagu = $_POST['judul_lagu'];
    $artis = $_POST['artis'];
    $durasi = $_POST['durasi'];

    $sql = "UPDATE lagu SET
    judul_lagu= '$judul_lagu',
    artis= '$artis',
    durasi= '$durasi'
    WHERE lagu_id =$lagu_id";

    $query = mysqli_query($db, $sql);

    if ($query){
        $_SESSION['notifikasi'] = "Data menu berhasil di perbarui";
    } else {
        $_SESSION['notifikasi'] = "Data menu gagal di perbarui";
    }

    header('Location: index.php');
} else {
    die("Akses ditolak..");
}
?>