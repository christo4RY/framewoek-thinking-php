<?php
function dd($value){
    echo"<pre>";
    die(print_r($value));
}

function view($name,$data=[]){
    extract($data);
    return require "./views/$name.view.php";
}

function redirect($name){
    return header("location: $name");
}

function request($name){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        return $_POST[$name];
    }
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        return $_GET[$name];
    }
}