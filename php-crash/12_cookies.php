<?php

// Set cookie

setcookie('name', 'brad', time() + 84600 * 30);

if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

setcookie('name', '', time() - 86400);
