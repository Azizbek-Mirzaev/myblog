<?php

require __DIR__ . "/../config/helpers.php";
require __DIR__ . "/../config/db.php";
//dump(rtrim($_SESSION['user'],"/"));

session_start();

// is_method("post") -> $_SERVER["REQUEST_METHOD"] == "POST"

if (is_method("post")) {
    //dump($_FILES);
    //dump($_POST);

    require ("../controllers/admin/news_create.controller.php");

} elseif (is_method("get")) {

    require ("../controllers/admin/news_list.controller.php");

}