<?php
session_start();
$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = trim($_POST['nim']);
    if (isset($_SESSION['mahasiswa'][$nim])) {
        unset($_SESSION['mahasiswa'][$nim]);
        $message = 'Data mahasiswa berhasil dihapus!';
    } else {
        $message = 'NIM tidak ditemukan!';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hapus Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 10px;
}

input {
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

th {
    background-color: #f2f2f2;</style>
    <div class="container">
        <h1>Hapus Data Mahasiswa</h1>
        <nav>
            <a href="index.php">Home</a> |
            <a href="tambah.php">Tambah Data</a> |
            <a href="lihat.php">Lihat Data</a> |
            <a href="hapus.php">Hapus Data</a>
        </nav>
        <p><?php echo $message; ?></p>
        <form method="post">
            <label>NIM: <input type="text" name="nim" required></label><br>
            <button type="submit">Hapus</button>
        </form>
    </div>
</body>
</html>