<?php
require "vendor/autoload.php";

use Nekro\Actions\User\GetUserById;
use Nekro\Controllers\User\UserController;
use Nekro\Infrastructure\Http\View\RenderEngine;
use Nekro\Infrastructure\Http\View\RouterEngine;
use Nekro\Infrastructure\Persistence\Mysql\DatabaseInstance;
use Nekro\Repositories\User\UserRepository;

$router = new RouterEngine();
$render = new RenderEngine();

$connection = DatabaseInstance::getConnection();
$userRepository = new UserRepository($connection);

$userController = new UserController();


$router->add("GET", "/inicio", function() use($render, $userController, $userRepository) {
  $user = $userController->getById(new GetUserById($userRepository), 1);
  echo $render->render("home", ["user" => $user]);
});


$router->run();
