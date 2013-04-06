<?php

namespace CC\TestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class authControllerTest extends WebTestCase
{
    public function testReg()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'auth/reg');
    }

    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'auth/login');
    }

    public function testUserinfo()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'auth/userinfo');
    }

}
