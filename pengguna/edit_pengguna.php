<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit pengguna</title>
</head>
<body>
    <h3>Edit pengguna</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="pengguna_id" value="<?php echo $pengguna['pengguna_id']; ?>">
        <table border="0">
        <tr>
    <td>Username</td>
                <td>
                    <input type="text" name="username"
                    value="<?php echo $pengguna['username']; ?>" required >
                </td>
            </tr>
            <tr>
    <td>Email</td>
                <td>
                    <input type="email" name="email"
                    value="<?php echo $pengguna['email']; ?>" required >
                </td>
            </tr>   
            </table>
        <button type="submit" name="simpan">Simpan</button>
</form>
</body>
</html>