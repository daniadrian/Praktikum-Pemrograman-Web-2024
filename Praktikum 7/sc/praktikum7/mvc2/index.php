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
    $controller->invoke();
}
