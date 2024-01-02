<?php

ini_set("session.use_only_cookies", 1);
ini_set("session.use_strict_mode", 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

session_start();

if (isset($_SESSION["user_id"])) {
    
    $interval = 60 * 30;
    if (time() - $_SESSION["last_regeneration"] >= $interval) {
        generate_id_loggedin();
    }

} else {

    if (!isset($_SESSION["last_regeneration"])) {
        generate_id();
    } else {
        $interval = 60 * 30;
        if (time() - $_SESSION["last_regeneration"] >= $interval) {
            generate_id();
        }
    }
    
}


function generate_id_loggedin() {
    $userId = $_SESSION["user_id"];
    $newSessionId = session_create_id();
    $sessionId = $newSessionId . "_" . $userId;
    session_id($sessionId);

    $_SESSION["last_regeneration"] = time();
}



function generate_id() {
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time();
}