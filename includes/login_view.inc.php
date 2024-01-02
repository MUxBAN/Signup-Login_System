<?php

declare(strict_types=1);

function check_login_form() {
    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];
        echo "<br>";
        foreach ($errors as $error) {
            echo "<p>" .$error. "</p>";
        }
        unset($_SESSION["errors_login"]);
    }
}


function login_inputs() {
    if (isset($_GET["login"]) && $_GET["login"] === "success") {
        echo "<p class='success'>Hello ". $_SESSION["user_username"] . " You Are logged In</p>";
    } else {
        echo '<h3>Login</h3>';
        echo '<input type="text" name="username" placeholder="Username">';
        echo '<input type="password" name="pwd" placeholder="Password">';
        echo '<button>Login</button>';
    }
}