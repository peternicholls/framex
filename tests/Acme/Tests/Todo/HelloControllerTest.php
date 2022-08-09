<?php

namespace Acme\Tests\Todo;

use Acme\Todo\HelloController;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\ServerRequest;

class HelloControllerTest extends TestCase
{
    public function testControllerReturnsValidResponse()
    {
        $request = new ServerRequest('GET', 'http://framex.local/');

        $controller = new HelloController();
        $response = $controller($request);

        $this->assertInstanceOf(ResponseInterface::class, $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals("Hello World!\n", (string) $response->getBody());
    }
}