<?php

use PHPUnit\Framework\TestCase;
use Gaivoronskiy\Exception;
use Gaivoronskiy\Line;

class EquationTest extends TestCase
{
    public function testEquation()
    {
        $equation = new Equation();
        $this->assertEquals([-12], $equation->equation(6, 72));
        $this->assertEquals([1], $line->line(-1, 1));
    }

    public function testEquationBad()
    {
        $line = new Line();
        $this->expectExceptionMessage('This line equation does not exist!');
        $this->expectException(Exception::class);
        $line->line(0, -7);
        $line->line(0, 2);
    }
}