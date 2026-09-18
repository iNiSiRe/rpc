<?php

namespace inisire\RPC\Result;

use Symfony\Component\HttpFoundation\Response;

class Result extends HttpResult implements MutableOutputInterface
{
    public function __construct(
        private mixed $output,
    ) {
    }

    public function getHttpCode(): int
    {
        return Response::HTTP_OK;
    }

    public function getOutput(): mixed
    {
        return $this->output;
    }

    public function setOutput(mixed $output)
    {
        $this->output = $output;
    }
}