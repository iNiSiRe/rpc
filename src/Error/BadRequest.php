<?php

namespace inisire\RPC\Error;

use inisire\DataObject\Error\ErrorMessage;
use inisire\RPC\Result\HttpResult;
use Symfony\Component\HttpFoundation\Response;

class BadRequest extends HttpResult implements ErrorInterface
{
    public function getCode(): string
    {
        return '1ec03457-6a38-6f5c-a57e-57277a6c17f6';
    }

    public function getMessage(): ErrorMessage
    {
        return new ErrorMessage('Bad request');
    }

    public function getHttpCode(): int
    {
        return Response::HTTP_BAD_REQUEST;
    }

    public function getOutput(): mixed
    {
        return null;
    }
}
