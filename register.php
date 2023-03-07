<?php
// echo "<pre>";
// print_r($_SERVER);
// echo "<pre>";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    require ("controllers/auth/register.controller.php");
}else{
    require ("views/auth/register.view.php");
}