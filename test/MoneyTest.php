<?php

require_once __DIR__ . '/vendor/autoload.php';

class MoneyTest extends PHPUnit_Framework_TestCase
{


 @test

    public function testCanBeNegated()
    {
        // Arrange
        $a = new Money(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(-1, $b->getAmount());
    }

    // ...
}
?>