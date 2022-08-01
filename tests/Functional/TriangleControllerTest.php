<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class TriangleControllerTest extends WebTestCase
{
    public function testGet(): void
    {
        $client = static::createClient();

        $client->request('GET', '/triangle/3/3/3');
        $response = $client->getResponse();

        $expectedJson = '{"type":"triangle","a":3,"b":3,"c":3,"surface":3.9,"diameter":9}';

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
        $this->assertJsonStringEqualsJsonString($expectedJson, $response->getContent());
    }
}