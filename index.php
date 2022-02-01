<?php

namespace App;

session_start();

require_once('vendor/autoload.php');

use Router\Router;
$router = new Router($_GET['url']);

$router->get("/", "App\Controller\AppController@index");
$router->get("/addbook", "App\Controller\BookController@add");
$router->post("/addbook", "App\Controller\BookController@add");
$router->get("/showbooks", "App\Controller\BookController@show");
$router->get("/modifybook:id", "App\Controller\BookController@modify");
$router->post("/modifybook:id", "App\Controller\BookController@modify");

$router->run();