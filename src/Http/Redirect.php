<?php

namespace inisire\RPC\Http;

use inisire\DataObject\Error\ErrorMessage;
use inisire\RPC\Result\HttpResult;
use Symfony\Component\HttpFoundation\Response;

class Redirect extends HttpResult
{
    public function __construct(
        private readonly string $location,
        private readonly bool $permanent = true,
    ) {
    }

    public function getHttpHeaders(): array
    {
        return [
            'Location' => $this->location,
        ];
    }

    public function getHttpCode(): int
    {
        return $this->permanent ? Response::HTTP_MOVED_PERMANENTLY : Response::HTTP_TEMPORARY_REDIRECT;
    }

    public function getOutput(): mixed
    {
        return null;
    }
}