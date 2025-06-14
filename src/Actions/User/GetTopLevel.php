<?php

namespace Nekro\Actions\User;

use Exception;
use Nekro\Repositories\User\UserRepository;

class GetTopLevel
{

  public function __construct(private UserRepository $userRepository)
  {
    
  }

  public function execute()
  {
    $user = $this->userRepository->getTopLevel();

    if(!count($user)) throw new Exception("Este Usuario nao existe!", 404);

    return $user;
  }

}
