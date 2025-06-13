<?php

namespace Nekro\Controllers;

class Controller
{
  public function success(string $message, int $code, mixed $details = [])
  {
    return ["success" => true, "message" => $message, "http_code" => $code, "details" => $details];
  }

  public function error(string $message, int $code, array $details = [])
  {
    return ["success" => false, "message" => $message, "http_code" => $code, "details" => $details];
  }
}
