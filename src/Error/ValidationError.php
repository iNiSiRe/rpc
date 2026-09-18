<?php

namespace inisire\RPC\Error;

use inisire\DataObject\Error\Error;
use inisire\DataObject\Error\ErrorMessage;
use inisire\DataObject\Error\PropertyError;
use inisire\RPC\Result\HttpResult;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\ConstraintViolationInterface;

class ValidationError extends HttpResult implements ErrorInterface
{
    /**
     * @var PropertyError[]
     */
    private array $errors;

    /**
     * @param array<PropertyError> $errors
     */
    public function __construct(array $errors)
    {
        $this->errors = $errors;
    }

    public function getCode(): string
    {
        return '1ec03458-6c52-6b02-aa2b-89e62bbf88ef';
    }

    public function getMessage(): ErrorMessage
    {
        return new ErrorMessage('Validation error');
    }

    /**
     * @return PropertyError[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param array<ConstraintViolationInterface> $violations
     */
    public static function createByViolations(iterable $violations): self
    {
        $errors = [];
        foreach ($violations as $violation) {
            $errors[] = new PropertyError(
                $violation->getPropertyPath(),
                [new Error(new ErrorMessage($violation->getMessageTemplate(), $violation->getParameters()), $violation->getCode())]
            );
        }

        return new self($errors);
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
