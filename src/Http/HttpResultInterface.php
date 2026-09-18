<?php

namespace inisire\RPC\Http;

use Symfony\Component\HttpFoundation\Cookie;

interface HttpResultInterface
{
    public function getHttpCode(): int;

    public function getHttpHeaders(): array;

    /**
     * @return array<Cookie>
     */
    public function getHttpCookies(): array;
}