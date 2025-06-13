<?php

namespace Nekro\Models\User\Contract;

interface Contract
{
  public function getUsername(): ?string;
  public function setUsername(string $username): self;
  public function getPassword(): ?string;
  public function setPassword(string $password): self;
  public function getLevel(): ?int;
  public function setLevel(int $level): self;
}
