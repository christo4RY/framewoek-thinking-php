<?php

use core\App;

App::get("database")->insert([
    "name" => $_POST['name'],
],"users");

header("location: /");