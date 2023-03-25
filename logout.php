<?php
require __DIR__ . "/config/helpers.php";

session_start();

if (! auth_user() ) {//(! isset($_SESSION['user']) ) {
    header('Location: /login.php');
    exit();
}

unset($_SESSION['user']);

header('Location: /login.php');