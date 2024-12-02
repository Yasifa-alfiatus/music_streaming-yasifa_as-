<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data pengguna</title>
</head>
<body>
  <h3>Tambah pengguna</h3>  
  <form action="proses_tambah.php" method="POST">
  <table border="0">
    <tr>
    <td>Username</td>
                <td><input type="text" name="username" required></td>
            </tr>
     <tr>
     <td>Email</td>
              <td><input type="email" name="email" required></td>
           </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">
            Simpan</button>
</form>
</body>
</html>