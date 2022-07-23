<?php

// $route->register([
//     "" => "controllers/IndexController.php",
//     "about" => "controllers/AboutController.php",
//     "contact" => "controllers/ContactController.php",
//     "names" => "controllers/add-name.php"
// ]);

use controllers\TodoControllers;

$route->get("",[TodoControllers::class,"home"]);
$route->get("about",[TodoControllers::class,"about"]);
$route->get("contact",[TodoControllers::class,"contact"]);
$route->post("names",[TodoControllers::class,"create"]);