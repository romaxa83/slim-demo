<?php

declare(strict_types=1);

namespace Test\Functional;

class HomeTest extends WebTestCase
{
    /** @test */
    public function success(): void
    {
        $response = $this->app()->handle(self::json('GET', '/'));

        self::assertEquals('application/json', $response->getHeaderLine('Content-Type'));
        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('{"app":"slim-api","version":"1.0"}', (string)$response->getBody());
    }

    /** @test */
    public function method(): void
    {
        $response = $this->app()->handle(self::json('POST', '/'));

        self::assertEquals(405, $response->getStatusCode());
    }
}