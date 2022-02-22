<?php

require 'Core/Request.php';
require 'Core/Router.php';

require 'controllers/PagesController.php';

function view($filename){
    return require "views/{$filename}.php";
}

function redirect(string $path){
    header("location:{$path}");
}