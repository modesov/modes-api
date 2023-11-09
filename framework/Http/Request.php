<?php

namespace Modes\Framework\Http;

class Request
{
    public function __construct(
        private readonly array $getParams,
        private readonly array $postData,
        private readonly array $files,
        private readonly array $cookies,
        private readonly array $server
    ) {
    }

    public static function createFromGlobals(): static
    {
        return new static($_GET, $_POST, $_FILES, $_COOKIE, $_SERVER);
    }

    public function get(string $key)
    {
        return $this->getParams[$key] ?? null;
    }
}
