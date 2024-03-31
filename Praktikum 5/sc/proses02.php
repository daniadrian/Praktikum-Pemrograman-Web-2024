<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="proses02.php" method="post" name="input">
        Nama Anda: <input type="text" name="nama">
        <br>
        <input type="submit" name="input" value="Input">
    </form>

    <?php
    if (isset($_POST['input'])) {
        $nama = $_POST['nama'];
        echo "Nama Anda: <b>$nama</b>";
    }
    ?>
    
</body>

</html>
