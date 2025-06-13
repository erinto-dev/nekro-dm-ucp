<?php

namespace Nekro\Models\User;

use Exception;
use Nekro\Models\User\Contract\Contract;
use stdClass;

class UserModel implements Contract
{
  public function __construct(private mixed $stdClass)
  {
    if(!$this->stdClass instanceof stdClass) $this->stdClass = null;
  }
  public function __get($name)
  {
    if(!property_exists($this->stdClass, $name)) throw new Exception("Este valor não existe no modelo");
    return $this->stdClass->$name;
  }

  public function getUsername(): ?string
  {
    return $this->__get("username");
  }

  public function setUsername(string $username): self
  {
    $this->stdClass->username = $username;
    return $this;
  }

  public function getPassword(): ?string
  {
    return (string) $this->stdClass->password;
  }

  public function setPassword(string $password): self
  {
    $this->stdClass->password = $password;
    return $this;
  }

  public function getLevel(): ?int
  {
    return (int) $this->stdClass->level;
  }

  public function setLevel(int $level): self
  {
    $this->stdClass->level = $level;
    return $this;
  }

  public function __toArray(): array
  {
    return (array) $this->stdClass;
  }

}
