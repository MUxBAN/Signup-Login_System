<?php

declare(strict_types=1);

function is_input_empty(string $username, string $pwd) {
    if (empty($username) || empty($pwd)) {
        return true;
    } else {
        return false;
    }
}

function is_username_wrong(array|bool $result) {
    if (!$result) {
        return true;
    } else {
        return false;
    }
}

function is_password_wrong(string $pwd, string $hashedpassword) {
    if (!password_verify($pwd, $hashedpassword)) {
        return true;
    } else {
        return false;
    }
}