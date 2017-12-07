<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 07/12/17
 * Time: 10:10
 */

namespace Test;

use Algo\Dojohnny;
use PHPUnit\Framework\TestCase;

class DojohnnyTest extends TestCase
{
    public function testOne()
    {
        $dojohnny = new Dojohnny();
        $this->assertEquals("ccoouu", $dojohnny->sortString("coucou"));
        $this->assertEquals("hjnnoy", $dojohnny->sortString("johnny"));
        $this->assertEquals("deilrsw", $dojohnny->sortString("wilders"));
    }

    public function testTwo()
    {
        $dojohnny = new Dojohnny();
        $this->assertEquals("[['ab', 'ba']['ac', 'ca']]", $dojohnny->annagram('ab ac ba ca'));
    }
}