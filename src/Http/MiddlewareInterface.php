<?php

namespace inisire\RPC\Http;

use inisire\RPC\Entrypoint\Entrypoint;
use inisire\RPC\Http\Context\RequestContext;
use inisire\RPC\Result\ResultInterface;

interface MiddlewareInterface
{
    public function handle(Entrypoint $entrypoint, mixed $parameter, RequestContext $context, callable $next): ResultInterface;
}
