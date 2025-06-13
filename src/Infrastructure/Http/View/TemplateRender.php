<?php

namespace Nekro\Infrastructure\Http\View;

class TemplateRender
{
  public function __construct(protected string $path, protected array $data)
  {
    
  }

  public function getArgs(?string $value): string
  {
    return htmlspecialchars($value ?? '', encoding: "UTF-8");
  }

  public function render(): string
  {
    ob_start();

    (function() {

      extract($this->data);
      include $this->path;

    })();

    return ob_get_clean();
  }
}
