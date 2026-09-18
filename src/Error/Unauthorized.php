<?php

namespace inisire\RPC\Error;


use inisire\DataObject\Error\ErrorMessage;
use inisire\RPC\Result\HttpResult;
use Symfony\Component\HttpFoundation\Response;

class Unauthorized extends HttpResult implements ErrorInterface
{
    public function getCode(): string
    {
        return '1ec00efa-d334-6128-9d0e-05046e394a77';
    }

    public function getMessage(): ErrorMessage
    {
        return new ErrorMessage('Unauthorized');
    }

    public function getHttpCode(): int
    {
        return Response::HTTP_UNAUTHORIZED;
    }

    public function getOutput(): mixed
    {
        return null;
    }
}
