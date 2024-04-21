<!DOCTYPE html>
<html>

<head>
    <title>Logout</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <p>
        <?php
        $msg = '';
        if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
            if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = 'admin';
                echo 'You have entered valid username and password';
                header("Location: Lat3_6a.php");
            } else {
                $msg = '<h2>Wrong Username or Password!<h2>';
                echo "$msg";
                echo " ";
                echo "<form action = 'lat3_6login.php' method = 'post'>
<input type = 'submit' value = 'Try Again' name = 'submit'>
</form>";
            }
        }
        ?>
    </p>
</body>

</html>