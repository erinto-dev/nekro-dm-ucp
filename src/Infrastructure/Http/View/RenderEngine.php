<?php

namespace Nekro\Infrastructure\Http\View;

use Exception;

class RenderEngine
{
  private string $path = "src/Views";
  private string $prefix = ".erin.php";
  public function render(string $template, array $data = []): string
  {
    $fileName = $template.$this->prefix;
    $path = $this->path.DIRECTORY_SEPARATOR.$fileName;

    if(!file_exists($path)) throw new Exception("Crie o Arquivo $fileName para o roteamento");

    return (new TemplateRender($path, $data))->render();
  }
}

