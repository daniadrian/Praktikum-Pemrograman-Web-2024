<?php
$conn = new mysqli("localhost", "root", "02030507", "praktikum7");
$nim = $_POST['nim'];
$password = $_POST['password'];
$query = "CALL pengurusbem('$nim','$password')";
$hasil = $conn->query($query) or die('query gagal');
if ($hasil->num_rows > 0) {
    $nama = "";
    $nim = "";
    $password = "";
    $jabatan = "";
    while ($data = $hasil->fetch_object()) {
        $nama = $data->nama;
        $nim = $data->nim;
        $password = $data->password;
        $jabatan = $data->jabatan;
    }
    require 'pengurusBEM.php';
    $pb = new pengurusBEM();
    $pb->setJabatan($jabatan);
    $pb->setNama($nama);
    $pb->setNim($nim);
    $pb->pilih();
} else {
    header('location: login.php?e=1');
}
?>
