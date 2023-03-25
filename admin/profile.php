<?php

require __DIR__ . "/../config/helpers.php";

session_start();

if (! auth_user() ) {//(! isset($_SESSION['user']) ) {
    header('Location: /login.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require ("../controllers/admin/profile.controller.php");

} else {

    require "../views/admin/profile.view.php";

}


