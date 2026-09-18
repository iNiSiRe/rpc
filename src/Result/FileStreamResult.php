<?php

namespace inisire\RPC\Result;

use inisire\RPC\Result\HttpResult;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\HttpFoundation\Response;

class FileStreamResult extends HttpResult
{
    public function __construct(
        private StreamInterface $stream,
        private string $mimeType,
    ) {
    }

    public function getHttpCode(): int
    {
        return Response::HTTP_OK;
    }

    public function getHttpHeaders(): array
    {
        return [
            'Content-Type' => $this->mimeType
        ];
    }

    public function getOutput(): mixed
    {
        return $this->stream;
    }
}
