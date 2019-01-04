<?php

require __DIR__ . '/../src/calculator.php';
use PHPUnit\Framework\TestCase;

     class CalculatorTest extends TestCase
     {
            public function testAdd()
            {
                $firstOperand = 7;
                $secondOperand = 3;
                $operator = '*';

                $calculator = new calculator();
//                $this->assertEquals(20, $calculator->add(10,7));
                 $this->assertEquals(21, $calculator->calculate($firstOperand, $secondOperand, $operator));


            }

     }
