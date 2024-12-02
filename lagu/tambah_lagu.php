<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Music Streaming</title>
</head>
<body>
  <h3>Tambah Lagu</h3>  
  <form action="proses_tambah.php" method="POST">
  <table border="0">
    <tr>
    <td>judul lagu</td>
                <td><input type="text" name="judul_lagu" required></td>
            </tr>
     <tr>
     <td>Artis</td>
              <td><input type="text" name="artis" required></td>
           </tr>
        <tr>
        <td>Durasi</td>
      <td><input type="text" name="durasi" placeholder="Contoh: 2m 56d" required></td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">
            Simpan</button>
</form>
</body>
</html>