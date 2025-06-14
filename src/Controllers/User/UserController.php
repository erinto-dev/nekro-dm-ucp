<?php

namespace Nekro\Controllers\User;

use Exception;
use Nekro\Actions\User\GetTopLevel;
use Nekro\Actions\User\GetUserById;
use Nekro\Controllers\Controller;

class UserController extends Controller
{
  public function getById(GetUserById $action, int $id)
  {
    try {
      $user = $action->execute($id);
      return parent::success("Conta encontrada", 200, $user);
    } catch(Exception $e) {
      return parent::error($e->getMessage(), $e->getCode());
    }
  }
  public function getTopLevel(GetTopLevel $action)
  {
    try {
      $users = $action->execute();
      return parent::success("Top levels", 200, $users);
    } catch(Exception $e) {
      return parent::error($e->getMessage(), $e->getCode());
    }
  }

}
