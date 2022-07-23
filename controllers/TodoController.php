<?php
namespace controllers;

use core\App;

class TodoControllers{
    public function home(){
        $user =  App::get("database")->selectAll("users");
        view("index",[
            "users" => $user
        ]);
    }

    public function about(){
        view("about");

    }

    public function contact(){
view("contact");
        
    }

    public function create() {
        App::get("database")->insert([
            "name" => request('name'),
        ],"users");
        
        redirect("/");
    }

}