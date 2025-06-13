<?php

namespace Nekro\Infrastructure\Http\View;

final class RouterEngine {
    private array $routes = [];

    public function add(string $method, string $path, callable $handler): void {
        $this->routes[] = [
            'method' => strtoupper($method),
            'path' => $path,
            'handler' => $handler
        ];
    }

    public function run(): void {
        $requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach ($this->routes as $route) {
            if ($route['method'] !== $requestMethod) {
                continue;
            }

            $pattern = $this->convertToRegex($route['path']);
            if (preg_match($pattern, $requestUri, $matches)) {

              array_shift($matches);

                call_user_func_array($route['handler'], $matches);
                return;
            }
        }

        http_response_code(404);
        echo "404 Not Found";
    }

    private function convertToRegex(string $path): string {
        $pattern = preg_replace('/:(\w+)/', '(?<$1>[^/]+)', $path);
        return '#^' . $pattern . '$#';
    }
}
