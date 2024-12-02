<?php

session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $pengguna_id = $_POST['pengguna_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "UPDATE pengguna SET
    pengguna= '$pengguna',
    email= '$email'
    WHERE pengguna_id =$pengguna_id";

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