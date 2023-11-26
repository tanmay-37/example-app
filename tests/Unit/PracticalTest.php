<?php

namespace Tests\Unit;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

require(__DIR__.'/../../practicals/Practical.php');
use Practicals\Practical;

class PracticalTest extends TestCase
{
    /**
     * A basic unit test for add
     */
    public function testAdd(): void
    {
        $this->assertEquals(Practical::add(1,3), 4);
    }
    public function testAddAcceptsFloat(): void
    {
        $this->assertEquals(Practical::add(1.5,3.5),5.0);
    }

    public function testAddAcceptsFloatInteger(): void
    {
        $this->assertEquals(Practical::add(1.5,2),3.5);
    }

    public function testAddAcceptsIntegerString(): void
    {
        $this->assertEquals(Practical::add("1","2"),3);
    }
    public function testAddAcceptsFloatString(): void
    {
        $this->assertEquals(Practical::add("1.4","3.14"),4.54);
    }

    public function testAddRejectsAlphabetString(): void
    {
        $this->expectException(InvalidArgumentException::class);
        Practical::add("abc","xyz");
    }    

    public function testAddRejectsAlphanumericString(): void
    {
        $this->expectException(InvalidArgumentException::class);
        Practical::add("a1",1);
    }

    /**
     * Unit test for generateFibonacciSequence
     */
    public function testFibonacciAcceptsInteger()
    {
        $practical = new Practical();
        $result = $practical->generateFibonacciSequence(4);
        $this->assertEquals([0, 1, 1, 2], $result);
    }

    public function testFibonacciRejectsIntegerString()
    {
        $this->expectException(InvalidArgumentException::class);
        $practical = new Practical();
        $practical->generateFibonacciSequence("4");
    }

    // public function testFibonacciRejectsAlphabetString()
    // {
    //     $this->expectException(InvalidArgumentException::class);
    //     $practical = new Practical();
    //     $practical->generateFibonacciSequence("abc");
    // }

    public function testFibonacciRejectsFloat()
    {
        $this->expectException(InvalidArgumentException::class);
        $practical = new Practical();
        $practical->generateFibonacciSequence(3.5);
    }

    

}

?>
