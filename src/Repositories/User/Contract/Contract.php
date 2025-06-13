<?php

namespace Nekro\Repositories\User\Contract;

use Nekro\Models\User\UserModel;

interface Contract
{
  public function getUserById(int $id): ?UserModel;
}
