<?php

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
define("HOST", "127.0.0.1");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "myblog2");


$db = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);;

if ($db->connect_errno) {
    echo "Bazaga ulanib bo'lmadi: " . $db->connect_error;
    exit(1);
}