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
   <h2>Data Music streaming</h2> 

   <?php if (isset($_SESSION['notifikasi'])): ?>
   <p><?php echo $_SESSION['notifikasi']; ?></p>
   <?php unset($_SESSION['notifikasi']); ?>
   <?php endif; ?>
   <table>
    <thead>
    <tr align="center">
                    <th>#</th>
                    <th>Judul lagu</th>
                    <th>Artis</th>
                    <th>Durasi</th>
                    <th><a href="tambah_lagu.php">Tambah Data</a></th>
    </tr>
    </thead>
    <tbody>
    <?php
       $no = 1;
       $query = $db->query("SELECT * FROM lagu");
       while ($lagu = $query->fetch_assoc()){
        ?>
         <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $lagu['judul_lagu']?></td>
        <td><?php echo $lagu['artis']?></td>
        <td><?php echo $lagu['durasi']?></td>
        <td align= "center">
        <a href="edit_lagu.php?id=<?php echo $lagu['lagu_id'] ?>">Edit</a>
        <a onclick= "return confirm('Anda yakin ingin menghapus data?')"
         href="hapus_lagu.php?id=<?php echo $lagu['lagu_id'] ?>">Hapus</a>
        </td>
        </tr>
        <?php
    }
    ?>
    <P>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>