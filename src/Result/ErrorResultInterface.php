<?php

namespace inisire\RPC\Result;

use inisire\DataObject\Error\ErrorMessage;

interface ErrorResultInterface extends ResultInterface
{
    public function getCode(): string;
    public function getMessage(): ErrorMessage;
}