<?php

namespace inisire\RPC\Result;

use Symfony\Component\HttpFoundation\Response;

class EmptyResult extends Result
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function getHttpCode(): int
    {
        return Response::HTTP_NO_CONTENT;
    }
}
