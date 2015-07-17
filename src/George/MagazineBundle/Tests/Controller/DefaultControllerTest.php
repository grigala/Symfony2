<?php

namespace George\MagazineBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase {
    public function testIndex() {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/George');

        $this->assertTrue($crawler->filter('html:contains("Hello George")')->count() > 0);
    }
}
