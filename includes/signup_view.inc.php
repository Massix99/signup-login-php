<?php

// enables types declaration
declare(strict_types=1);


function signup_inputs()
{
    if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])) {
        echo '<input name="username" type="text" placeholder="Username" value="' . $_SESSION["signup_data"]["username"] . '"> ';
    } else {
        echo ' <input name="username" type="text" placeholder="Username" />';
    }

    echo ' <input name="password" type="password" placeholder="Password" />';


    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) && !isset($_SESSION["errors_signup"]["invalid_email"])) {
        echo '<input name="email" type="text" placeholder="E-Mail" value="' . $_SESSION["signup_data"]["email"] . '"> ';
    } else {
        echo ' <input name="email" type="text" placeholder="E-Mail" />';
    }
}
function check_signup_errors()
{
    if (isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];

        echo "<br>";

        foreach ($errors as $error) {
            echo "<p>" . $error . "</p>";
        }

        unset($_SESSION["errors_signup"]);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo "<br>";
        echo "<p>Signup success!</p>";
    }
}
