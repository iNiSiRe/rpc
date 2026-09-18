<?php

namespace inisire\RPC\Error;

use inisire\DataObject\Error\ErrorMessage;
use inisire\RPC\Result\HttpResult;
use Symfony\Component\HttpFoundation\Response;

class AccessDenied extends HttpResult implements ErrorInterface
{
    public function getCode(): string
    {
        return '1ec00efb-17f9-6eb6-a1d9-55e2cc62c6ce';
    }

    public function getMessage(): ErrorMessage
    {
        return new ErrorMessage('Access denied');
    }

    public function getHttpCode(): int
    {
        return Response::HTTP_FORBIDDEN;
    }

    public function getOutput(): mixed
    {
        return null;
    }
}
