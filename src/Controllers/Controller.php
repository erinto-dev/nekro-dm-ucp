<?php

namespace Nekro\Controllers;

use stdClass;

class Controller
{
  public function success(string $message, int $code, mixed $details = [])
  {
    http_response_code($code);
    return json_encode(["success" => true, "message" => $message, "http_code" => $code, "details" => $details], JSON_PRETTY_PRINT);
  }

  public function error(string $message, int $code, array $details = [])
  {
    http_response_code($code);
    return json_encode(["success" => false, "message" => $message, "http_code" => $code, "details" => $details], JSON_PRETTY_PRINT);
  }
}
