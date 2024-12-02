<?php
session_start();
include("../koneksi.php");

if(isset($_POST['simpan'])){
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "INSERT INTO pengguna
    (username, email)
    VALUES ('$username', '$email')";

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