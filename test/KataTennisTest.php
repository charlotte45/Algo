<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 05/12/17
 * Time: 10:23
 */

namespace Test;


use Algo\KataTennis;
use PHPUnit\Framework\TestCase;

class KataTennisTest extends TestCase
{
    public function testOne()
    {
        $kataTennis = new KataTennis();
        $this->assertEquals("30, 15", $kataTennis->calculScoreSet("121"));
        $this->assertEquals("30, 40", $kataTennis->calculScoreSet("11222"));
        $this->assertEquals("win, 30", $kataTennis->calculScoreSet("111221"));
        $this->assertEquals("win, 30", $kataTennis->calculScoreSet("1112212"));
    }
}