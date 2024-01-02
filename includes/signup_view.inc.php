<?php

declare(strict_types=1);


function check_signup_errors() {
    if (isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];
        echo "<br>";
        foreach ($errors as $error) {
            echo "<p>" .$error. "</p>";
        }
        unset($_SESSION["errors_signup"]);
    }
}


function signup_appear() {
    if (isset($_GET["signup"]) && $_GET["signup"] == "success") {
        echo "<br>";
        echo "<p class='success'>Signup succeeded</p>";
    } else {
        echo '<h3>Signup</h3>';
        if (isset($_SESSION["signup_data"]["username"])) {
            echo '<input type="text" name="username" placeholder="Username" value ="' . $_SESSION["signup_data"]["username"] . '">';
        } else {
            echo '<input type="text" name="username" placeholder="Username">';
        }
        echo '<input type="password" name="pwd" placeholder="Password">';
        if (isset($_SESSION["signup_data"]["email"])) {
            echo '<input type="text" name="email" placeholder="E-Mail" value ="' . $_SESSION["signup_data"]["email"] . '">';
        } else {
            echo '<input type="text" name="email" placeholder="E-Mail">';
        }
        echo '<button>Signup</button>';
        unset($_SESSION["signup_data"]);
    }
}