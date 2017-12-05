<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 30/11/17
 * Time: 10:07
 */

namespace Test;

use PHPUnit\Framework\TestCase;
use Algo\Ucwords;


class UcwordsTest extends TestCase
{
    public function testOne()
    {
        $transformFirstCharacterToUpper = new Ucwords();
        $this->assertEquals("Coucou", $transformFirstCharacterToUpper->transformFirstCharacterToUpper("coucou", " "));
        $this->assertEquals("Hello World", $transformFirstCharacterToUpper->transformFirstCharacterToUpper("hello world", " "));
        $this->assertEquals("Hello-World", $transformFirstCharacterToUpper->transformFirstCharacterToUpper("hello-world", "-"));
        $this->assertEquals("Hello World On Est Les 2 Meilleures", $transformFirstCharacterToUpper->transformFirstCharacterToUpper("hello world on est les 2 Meilleures", " "));
    }
}