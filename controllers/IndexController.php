<?php

use core\App;

$user =  App::get("database")->selectAll("users");
view("index",[
    "users" => $user
]);