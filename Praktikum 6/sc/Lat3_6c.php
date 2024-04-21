<!DOCTYPE html>
<html>

<head>
    <title>Order Summary</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Order Summary</h2>
    <p>
        <?php
        $num_cd_order = $_COOKIE['cd_order'];
        $num_dvd_order = $_COOKIE['dvd_order'];
        echo "Ordered CD: " . $num_cd_order . " pieces <br>";
        echo "Ordered DVD: " . $num_dvd_order . " pieces <br>";
        ?>
    </p>
    <form action="Lat3_6a.php" method="post"> <br>
        <input type="submit" value="Edit Order" name="submit">
    </form>
    <form action="Lat3_6Login.php" method="POST">
        <input type="submit" value="Log Out" name="submit" />
    </form>
</body>

</html>