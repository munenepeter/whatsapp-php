<?php

require 'Core/Request.php';
require 'Core/Router.php';

require 'controllers/PagesController.php';

function view($filename, $data = []){
    extract($data);
    return require "views/{$filename}.php";
}

function redirect(string $path){
    header("location:{$path}");
}
function abort($code,$message){
    view('error', [
        'code' => $code,
        'message' => $message
    ]);
}