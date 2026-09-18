<?php

namespace inisire\RPC\Error;

use inisire\DataObject\Error\ErrorMessage;
use inisire\RPC\Result\HttpResult;
use Symfony\Component\HttpFoundation\Response;

class ServerError extends HttpResult implements ErrorInterface
{
    public function __construct(
        private \Throwable $error,
    ) {
    }

    public function getCode(): string
    {
        return '8ea34e11-64e1-431c-9e1d-bcbc8408d7ef';
    }

    public function getMessage(): ErrorMessage
    {
        return new ErrorMessage('Internal server error');
    }

    public function getHttpCode(): int
    {
        return Response::HTTP_INTERNAL_SERVER_ERROR;
    }

    public function getOutput(): mixed
    {
        return null;
    }
}
