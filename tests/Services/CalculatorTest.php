<?php

namespace App\tests\Services;

use App\Services\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(10, 32);
        
        $this->assertEquals(42, $result);
    }
}