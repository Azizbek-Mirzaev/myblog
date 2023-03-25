<?php

require __DIR__ . "/../config/helpers.php";
require __DIR__ . "/../config/db.php";

session_start();



//if(is_method('post')) {

    require __DIR__ . "/../controllers/admin/news_delete.controller.php";

//} 
//dump(__DIR__);
//elseif (is_method('get')) {

//     require __DIR__ . "/../controllers
//     /admin/news_delete.controller.php";

// }