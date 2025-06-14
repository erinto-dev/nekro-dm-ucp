<?php

namespace Nekro\Repositories\User;

use Nekro\Infrastructure\Persistence\Mysql\DatabaseInstance;
use Nekro\Models\User\UserModel;
use Nekro\Repositories\User\Contract\Contract;
use PDO;

class UserRepository implements Contract
{
  public function __construct(private PDO $pdo)
  {
    
  }

  public function getUserById(int $id): ?UserModel
  {
    $sql = $this->pdo->prepare("SELECT * FROM players WHERE id = :id LIMIT 1");
    $sql->bindParam(":id", $id);
    $sql->execute();
    $result = $sql->fetch();

    return new UserModel($result);
  }

  public function getTopLevel(): array
  {
    $sql = $this->pdo->prepare("SELECT username, skin, level FROM players ORDER BY level DESC LIMIT 15"); 
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $result;
  }

}
