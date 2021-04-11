<?php

use PHPUnit\Framework\TestCase;
use Gaivoronskiy\Exception;
use Gaivoronskiy\Square;

class QuEquationTest extends TestCase
{
    public function testQuEquationBad()
    {
        $QuEquationEx = new QuEquation();
        $this->expectExceptionMessage("Ошибка: уравнение не имеет корней.");
        $this->expectException(Exception::class);
        $squareEx->solve(4, 0, 8);
        $squareEx->solve(4, 2, 1);
    }

    public function testQuEquation()
    {
        $QuEquation = new QuEquation();
        $this->assertEquals([5, -5], $QuEquation->solve(-3, 0, 75));
        $this->assertEquals([-3], $QuEquation->solve(0, 3, 9));
        $this->assertEquals([-3], $QuEquation->solve(1, 6, 9));
    }
}