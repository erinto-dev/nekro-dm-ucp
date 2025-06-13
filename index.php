<?php

use Nekro\Actions\User\GetUserById;
use Nekro\Controllers\User\UserController;
use Nekro\Infrastructure\Persistence\Mysql\DatabaseInstance;
use Nekro\Repositories\User\UserRepository;

require "vendor/autoload.php";

$connection =  DatabaseInstance::getConnection();
$userRepository = new UserRepository($connection);

$userController = new UserController();

$c = $userController->getById(new GetUserById($userRepository), 1);

var_dump($c);
