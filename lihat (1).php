<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lihat Data Mahasiswa</title>
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
        <h1>Lihat Data Mahasiswa</h1>
        <nav>
            <a href="index.php">Home</a> |
            <a href="tambah.php">Tambah Data</a> |
            <a href="lihat.php">Lihat Data</a> |
            <a href="hapus.php">Hapus Data</a>
        </nav>
        <table>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
            </tr>
            <?php
            if (empty($_SESSION['mahasiswa'])) {
                echo "<tr><td colspan='3'>Tidak ada data.</td></tr>";
            } else {
                foreach ($_SESSION['mahasiswa'] as $nim => $data) {
                    echo "<tr><td>$nim</td><td>{$data['nama']}</td><td>{$data['jurusan']}</td></tr>";
                }
            }
            ?>
        </table>
    </div>
</body>
</html>