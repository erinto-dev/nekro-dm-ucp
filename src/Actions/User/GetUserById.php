<?php

namespace Nekro\Actions\User;

use Exception;
use Nekro\Repositories\User\UserRepository;

class GetUserById
{

  public function __construct(private UserRepository $userRepository)
  {
    
  }

  public function execute(int $id)
  {
    $user = $this->userRepository->getUserById($id)->__toArray();

    if(!count($user)) throw new Exception("Este Usuario nao existe!", 404);

    return $user;
  }

}
