<?php

namespace inisire\RPC\Result;


use inisire\RPC\Http\HttpResultInterface;

class Result implements ResultInterface, HttpResultInterface, MutableOutputInterface
{
    public function __construct(
        private mixed $output,
        private array $headers = [],
    )
    {
    }

    public function getOutput(): mixed
    {
        return $this->output;
    }

    public function getHttpCode(): int
    {
        return 200;
    }

    public function getHttpHeaders(): array
    {
        return $this->headers;
    }

    public function setOutput(mixed $output): Result
    {
        $this->output = $output;

        return $this;
    }

    public function setHeaders(array $headers): Result
    {
        $this->headers = $headers;

        return $this;
    }
}