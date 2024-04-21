<?php
session_start();
$data = $_SESSION['data'];
echo "<p>Nilai Angka: " . $data['angka'] . "</p>";
echo "<p>Hasil Faktorial: " . $data['faktorial'] .
    "</p>";
echo "<p>Nama: " . $data['nama'] . "</p>";
echo "<p>NIM: " . $data['nim'] . "</p>";
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <a href="Lat3_3a.php">Kembali ke Form</a>
</body>
</html>