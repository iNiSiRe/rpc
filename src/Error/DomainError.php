<?php

namespace inisire\RPC\Error;

use inisire\DataObject\Error\ErrorMessage;
use inisire\RPC\Result\HttpResult;
use Symfony\Component\HttpFoundation\Response;

class DomainError extends HttpResult implements ErrorInterface
{
    private string $code;
    private ErrorMessage $message;

    public function __construct(string $code, string $message)
    {
        $this->code = $code;
        $this->message = new ErrorMessage($message);
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getMessage(): ErrorMessage
    {
        return $this->message;
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
