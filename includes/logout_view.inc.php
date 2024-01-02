<?php

declare(strict_types=1);

function logout() {
    if (isset($_SESSION["user_id"])) {
        echo '<button>Logout</button>';
    }
}