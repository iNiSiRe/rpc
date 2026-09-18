<?php

namespace inisire\RPC\Result;

use inisire\RPC\Http\HttpResultInterface;
use Symfony\Component\HttpFoundation\Cookie;

abstract class HttpResult implements ResultInterface, HttpResultInterface
{
    public function getHttpHeaders(): array
    {
        return [];
    }

    /**
     * @return array<Cookie>
     */
    public function getHttpCookies(): array
    {
        return [];
    }
}
