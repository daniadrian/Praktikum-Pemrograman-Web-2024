<?php
session_start();
function faktorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return $n * faktorial($n - 1);
    }
}
$angka = $_POST['angka'];
$hasil_faktorial = faktorial($angka);
$data = array(
    "angka" => $angka,
    "faktorial" => $hasil_faktorial,
    "nama" => "Dani Adrian",
    "nim" => "225150201111009"
);
$_SESSION['data'] = $data;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <p>Nilai Angka yang dimasukkan:
        <?php echo $angka ?>
    </p>
    <p>Hasil Faktorial:
        <?php echo $hasil_faktorial ?>
    </p>
    <a href="Lat3_3c.php">Lihat Hasil</a>
</body>
</html>