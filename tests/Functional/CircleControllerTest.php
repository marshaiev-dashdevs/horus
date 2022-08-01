<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class CircleControllerTest extends WebTestCase
{
    public function testGet(): void
    {
        $client = static::createClient();

        $client->request('GET', '/circle/5');
        $response = $client->getResponse();

        $expectedJson = '{"type":"circle","radius":5,"surface":78.54,"diameter":31.42}';

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
        $this->assertJsonStringEqualsJsonString($expectedJson, $response->getContent());
    }
}