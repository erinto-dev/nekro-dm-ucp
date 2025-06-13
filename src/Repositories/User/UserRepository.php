<?php

namespace Nekro\Repository\User;

use Nekro\Infrastructure\Persistence\Mysql\DatabaseInstance;
use Nekro\Models\User\UserModel;
use Nekro\Repository\User\Contract\Contract;
use PDO;

class UserRepository implements Contract
{
  public function __construct(private PDO $pdo)
  {
    
  }

  public function getUserById(int $id): ?UserModel
  {
    $sql = $this->pdo->prepare("SELECT * FROM players WHERE id = :id LIMIT 1");
    $sql->execute();

    $result = $sql->fetch();

    return new UserModel($result);
  }
}
