<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    session_start();
    session_destroy();
    ?>
    <h2>Login</h2>
    <form class="form-signin" role="form" action="Lat3_6Logout.php" method="post">
        <p>
            Username
            <input type="text" class="form-control" name="username" required autofocus></br>
        </p>
        <p>
            Password
            <input type="password" class="form-control" name="password" required>
        </p><br>
        <button type="submit" name="login">Log In </button>
</body>

</html>