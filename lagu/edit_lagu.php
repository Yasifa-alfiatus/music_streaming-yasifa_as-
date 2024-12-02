<?php
include("../koneksi.php");

$id = $_GET['id'];

$query = $db->query("SELECT * FROM  lagu WHERE lagu_id = '$id'");
$lagu = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit menu</title>
</head>
<body>
    <h3>Edit Menu</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="lagu_id" value="<?php echo $lagu['lagu_id']; ?>">
        <table border="0">
        <tr>
    <td>Judul lagu</td>
                <td>
                    <input type="text" name="judul_lagu"
                    value="<?php echo $lagu['judul_lagu']; ?>" required >
                </td>
            </tr>
            <tr>
    <td>Artis</td>
                <td>
                    <input type="text" name="artis"
                    value="<?php echo $lagu['artis']; ?>" required >
                </td>
            </tr>   
     <tr>
    <td>Durasi</td>
               <td>
                <input type="text" name="durasi"
                value="<?php echo $lagu['durasi']; ?>"</td>
            </tr>
            </table>
        <button type="submit" name="simpan">Simpan</button>
</form>
</body>
</html>