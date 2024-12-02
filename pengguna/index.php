<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data music streaming</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px
        }
        </style>
</head>
<body>
   <h2>Data Pengguna</h2> 

   <?php if (isset($_SESSION['notifikasi'])): ?>
   <p><?php echo $_SESSION['notifikasi']; ?></p>

   <?php unset($_SESSION['notifikasi']); ?>
   <?php endif; ?>
   <table>
    <thead>
    <tr align="center">
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th><a href="tambah_lagu.php">Tambah Data</a></th>
    </tr>
    </thead>
    <tbody>
    <?php
       $no = 1;
       $query = $db->query("SELECT * FROM pengguna");
       while ($pengguna = $query->fetch_assoc()){
        ?>
         <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $pengguna['username']?></td>
        <td><?php echo $pengguna['email']?></td>
        <td align= "center">
        <a href="edit_pengguna.php?id=<?php echo $pengguna['pengguna_id'] ?>">Edit</a>
        <a onclick= "return confirm('Anda yakin ingin menghapus data?')"
         href="hapus_pengguna.php?id=<?php echo $pengguna['pengguna_id'] ?>">Hapus</a>
        </td>
        </tr>
        <?php
    }
    ?>
    <P>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>