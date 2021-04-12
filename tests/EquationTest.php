<?php

use PHPUnit\Framework\TestCase;
use Gaivoronskiy\Exception;
use Gaivoronskiy\Equation;

class EquationTest extends TestCase
{
    public function testEquation()
    {
        $equation = new Equation();
        $this->assertEquals([-12], $equation->li_solve(6, 72));
        $this->assertEquals([1], $equation->li_solve(-1, 1));
    }

    public function testEquationBad()
    {
        $line = new Line();
        $this->expectExceptionMessage('Ошибка: уравнения не существует.');
        $this->expectException(Exception::class);
        $equation->li_solve(0, -100);
        $equation->li_solve(0, 46);
    }
}
