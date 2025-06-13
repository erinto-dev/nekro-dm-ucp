<?php

namespace Nekro\Infrastructure\Persistence\Mysql;

use PDO;

class DatabaseInstance
{

  private static ?PDO $instance = null;
  public static function getConnection()
  {

    if (self::$instance === null) {
      self::$instance = new PDO("mysql:host=0.0.0.0:3307;dbname=nekro_dm", "root", "100Senha#", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
      ]);
    }
    return self::$instance;
  }
}
