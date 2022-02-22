<?php
//get routes

$router->get('', 'PagesController@index');
$router->get('index', 'PagesController@index');
$router->get('index.php', 'PagesController@index');
$router->get('chat', 'PagesController@chat');
$router->get('error', 'PagesController@error');
