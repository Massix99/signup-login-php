<?php
require_once "includes/config_session.inc.php";
require_once "includes/signup_view.inc.php";
require_once "includes/login_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/styles.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
    </style>
</head>

<body>
    <!-- <?php include "templates/header.php" ?> -->


    <!-- LOGIN  -->
    <form method="post" action="includes/login.inc.php">
        <input name="username" type="text" placeholder="Username" /><br>
        <input name="password" type="password" placeholder="Password" /><br>
        <button>Login</button>
    </form>

    <?php
    check_login_errors();
    ?>

    <br>
    <!-- SIGNUP -->
    <form method="post" action="includes/signup.inc.php">
        <?php signup_inputs() ?>

        <button>Signup</button>
    </form>

    <?php
    check_signup_errors();
    ?>


    <!-- LOGOUT  -->
    <form method="post" action="includes/logout.inc.php">
        <button>Logout</button>
    </form>

</body>

</html>