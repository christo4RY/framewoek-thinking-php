<?php
require "vendor/autoload.php";
require "core/bootstrap.php";
require Route::load("routes.php")->direct(Request::uri(),$_SERVER['REQUEST_METHOD']);//trim()