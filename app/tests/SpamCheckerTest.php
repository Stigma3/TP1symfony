<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SpamCheckerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $client->request('GET', 'https://localhost/login');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Facebook');
    }


//   public function testCommentSubmission()
//      {
//          $client = static::createClient();
//          $client->request('GET', 'https://localhost/login');
//          $client->submitForm('submit', [
//              'email' => 'test2@gmail.com',
//              'password' => 'password',
//          ]);
//          $this->assertResponseRedirects();
//          $client->followRedirect();
//          $this->assertSelectorExists('div:contains("There are 2 comments")');
//      }
}
 