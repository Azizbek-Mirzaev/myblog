<?php

require __DIR__ . "/../config/helpers.php";
//dump(rtrim($_SESSION['user'],"/"));

session_start();

if (! auth_user() ) { //(! isset($_SESSION['user']) ) {
    header('Location: /login.php');
    exit();
}

require('..//views/admin/index.view.php');

// echo "<pre>";
// print_r($_SESSION['user']);
// echo "</pre>";