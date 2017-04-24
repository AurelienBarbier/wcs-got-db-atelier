<?php

namespace WCS\GoTBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PersonnageControllerTest extends WebTestCase
{
    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/show');
    }

    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/list');
    }

    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/add');
    }

    public function testChangeroyaume()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'change-royaume');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/delete');
    }

}
