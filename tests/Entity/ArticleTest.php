<?php

namespace App\tests\Entity;

use App\Entity\Article;
use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{

    public function testUri()
    {
        $article = new Article();
        $uri = "test 2";
        
        $article->setUri($uri);
        $this->assertEquals("test 2", $article->getUri());
    }
}