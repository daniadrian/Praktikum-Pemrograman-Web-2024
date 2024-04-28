<?php
include_once("c_programKerja.php");
$controller = new c_programKerja();
if (isset($_GET['d'])) {
    $controller->delete($_GET['d']);
} else if (isset($_GET['u'])) {
    $controller->viewUpdate($_GET['u']);
} else if (isset($_GET['i'])) {
    $controller->viewInsert();
} else {
    $nim = "-";
    $nama = "-";
    $jabatan = "-";
    if (isset($_GET['nim'])) {
        $nim = $_GET['nim'];
        $jabatan = $_GET['jabatan'];
        $nama = $_GET['name'];
    }
    $controller->invoke($nama, $nim, $jabatan);
}
