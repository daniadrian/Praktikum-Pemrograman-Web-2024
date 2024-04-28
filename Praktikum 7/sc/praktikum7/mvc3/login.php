<html>

<head>
    <h1>Login</h1>
</head>

<body>
    <form action="admin.php" method="post">
        <table>
            <tr>
                <td>
                    <p1>NIM</p1>
                </td>
                <td> : </td>
                <td><input type="text" id="nim" name="nim" placeholder="nim"><br /></td>
            </tr>
            <tr>
                <td>
                    <p2>Password</p2>
                </td>
                <td> : </td>
                <td><input type="password" id="pass" name="password" placeholder="password"><br /></td>
            </tr>
            <tr>
                <td><input type="submit" id="tombol" name="tombol" value="Login"></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
<?php
$gagal = "";
if (isset($_GET['e'])) {
    if ($_GET['e'] == 1) {
        $gagal = "NIM atau password salah !";
        echo $gagal;
    } else if ($_GET['e'] == 2) {
        echo "Terjadi Kesalahan, Login Kembali !";
    }
}
?>

</html>