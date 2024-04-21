<!DOCTYPE html>
<html>

<head>
    <title>Order Form</title>
</head>

<body>
    <?php
    $num_cd_order = 0;
    $num_dvd_order = 0;
    if (isset($_COOKIE['cd_order']) && isset($_COOKIE['dvd_order'])) {
        $num_cd_order = $_COOKIE['cd_order'];
        $num_dvd_order = $_COOKIE['dvd_order'];
    }
    ?>
    <form action="Lat3_5b.php" method="post">
        <p> Order CD, amount:
            <input type="text" name="cd_order" value="<?php echo "$num_cd_order" ?>" size="2" maxlength="2">
        </p>
        <p> Order DVD, amount:
            <input type="text" name="dvd_order" value="<?php echo "$num_dvd_order" ?>" size="2" maxlength="2">
        </p>
        <input type="submit" value="Add To Cart" name="submit">
    </form>
</body>

</html>