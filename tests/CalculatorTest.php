<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;
use InvalidArgumentException;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        // Deze methode wordt vóór elke test uitgevoerd.
        // Hier maken we één keer een nieuwe Calculator aan
        // zodat elke test met een "schone" situatie begint.
        $this->calculator = new Calculator();
    }

    /* =========================
     * BASIC OPERATIONS
     * ========================= */

    public function testAdd()
    {
        // Arrange
        $a = 5;
        $b = 3;

        // Act
        $result = $this->calculator->add($a, $b);

        // Assert
        $this->assertEquals(8, $result);
    }

    /*
     * OPDRACHT:
     * Maak hieronder een test voor:
     * - optellen met negatieve getallen
     *
     * Denk aan:
     * - Arrange
     * - Act
     * - Assert
     */

    public function testAddWithNegativeNumbers()
    {
        // Arrange
        $a = -5;
        $b = -3;

        // Act
        $result = $this->calculator->add($a, $b);

        // Assert
        $this->assertEquals(-8, $result);
    }

    /*
     * OPDRACHT:
     * Maak een test voor subtract().
     * Test een normale situatie (bijvoorbeeld 10 - 4).
     */
    public function testSubtract()
    {
        // Arrange
        $a = 10;
        $b = 4;

        // Act
        $result = $this->calculator->subtract($a, $b);

        // Assert
        $this->assertEquals(6, $result);
    }

    /*
     * OPDRACHT:
     * Maak een test voor multiply().
     * Test:
     * - een normale vermenigvuldiging
     * - vermenigvuldigen met 0
     */

        public function testMultiply()
        {
            // Arrange
            $a = 5;
            $b = 3;
    
            // Act
            $result = $this->calculator->multiply($a, $b);
    
            // Assert
            $this->assertEquals(15, $result);
        }

    /*
     * OPDRACHT:
     * Maak een test voor divide().
     * Test:
     * - een normale deling
     * - delen door 0 moet een InvalidArgumentException geven
     *
     * Tip voor exception test:
     * $this->expectException(InvalidArgumentException::class);
     */

    public function testDivide()
    {
        // Arrange
        $a = 10;
        $b = 2;

        // Act
        $result = $this->calculator->divide($a, $b);

        // Assert
        $this->assertEquals(5, $result);
    }

    public function testDivideByZero()
    {
        // Arrange
        $a = 10;
        $b = 0;

        // Assert
        $this->expectException(InvalidArgumentException::class);

        // Act
        $this->calculator->divide($a, $b);
    }

    /* =========================
     * POWER
     * ========================= */

    /*
     * OPDRACHT:
     * Maak een test voor power().
     * Test:
     * - 2 tot de macht 3
     * - exponent 0 (uitkomst moet 1 zijn)
     */
    public function testPower()
    {
        // Arrange
        $base = 2;
        $exponent = 3;

        // Act
        $result = $this->calculator->power($base, $exponent);

        // Assert
        $this->assertEquals(8, $result);
    }

    public function testPowerWithZeroExponent()
    {
        // Arrange
        $base = 2;
        $exponent = 0;

        // Act
        $result = $this->calculator->power($base, $exponent);

        // Assert
        $this->assertEquals(1, $result);
    }

    /* =========================
     * PERCENTAGE
     * ========================= */

    /*
     * OPDRACHT:
     * Maak tests voor percentage().
     * Test:
     * - 10% van 200
     * - 0%
     * - een percentage boven de 100%
     */

    public function testPercentage()
    {
        // Arrange
        $total = 200;
        $percentage = 0.10;

        // Act
        $result = $this->calculator->percentage($total, $percentage);

        // Assert
        $this->assertEquals(20, $result);
    }

    /* =========================
     * AVERAGE
     * ========================= */

    /*
     * OPDRACHT:
     * Maak tests voor average().
     * Test:
     * - gemiddelde van 2 getallen
     * - gemiddelde van meerdere getallen
     * - lege array moet een exception geven
     */

    public function testAverage()
    {
        // Arrange
        $numbers = [10, 20];

        // Act
        $result = $this->calculator->average($numbers);

        // Assert
        $this->assertEquals(15, $result);
    }

    /* =========================
     * HIGHEST
     * ========================= */

    /*
     * OPDRACHT:
     * Maak tests voor highest().
     * Test:
     * - normale getallen
     * - negatieve getallen
     */

    public function testHighest()
    {
        // Arrange
        $numbers = [10, 20, 5];

        // Act
        $result = $this->calculator->highest($numbers);

        // Assert
        $this->assertEquals(20, $result);
    }

    /* =========================
     * LOWEST
     * ========================= */

    /*
     * OPDRACHT:
     * Maak tests voor lowest().
     * Test:
     * - normale getallen
     * - decimalen
     */
    public function testLowest()
    {
        // Arrange
        $numbers = [10, 20, 5];

        // Act
        $result = $this->calculator->lowest($numbers);

        // Assert
        $this->assertEquals(5, $result);
    }
}
