<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Pengguna</title>
</head>
<body>
    <h2>Form Tambah Pengguna</h2>
    <form action="submit.php" method="POST">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
