<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 30/11/17
 * Time: 10:49
 */

namespace Test;

use PHPUnit\Framework\TestCase;
use Algo\CamelCase;


class CamelCaseTest extends TestCase
{
    public function testOne()
    {
        $camelCase = new CamelCase();
        $this->assertEquals("maSuperVariable", $camelCase->transformSnakeCaseToCamelCase("ma_super_variable", "_"));
        $this->assertEquals("maSuperVariableEstTropGéniale", $camelCase->transformSnakeCaseToCamelCase("ma_super_variable_est_trop_géniale", "_"));
        $this->assertEquals("maSuperVariableEstTropGéniale", $camelCase->transformSnakeCaseToCamelCase("Ma_super_variable_est_trop_géniale", "_"));
        $this->assertEquals("maSuperVariableEstTropGéniale", $camelCase->transformSnakeCaseToCamelCase("Ma_super_variable est_trop_géniale", "_"));
    }
}