<?php

namespace Wolust;

use PHPUnit\Framework\TestCase;
use Wolust\SuperDivider;

class SuperDividerTest extends TestCase
{
    /**
     * @var \Wolust\SuperDivider
     */
    private $sut;

    protected function setUp()
    {
        $this->sut = new SuperDivider();
    }

    /**
     * @test
     */
    public function itShouldDivide()
    {
        $this->assertEquals(2, $this->sut->integerDivide(10, 5));
    }

    /**
     * @test
     * @expectedException \LogicException
     * @expectedExceptionMessage division by zero is not allowed
     */
    public function itShouldThrowAnExceptionByDivisionByZero()
    {
        $this->sut->integerDivide(10, 0);
    }

    /**
     * @test
     */
    public function itShouldDivideTwoFloats()
    {
        $this->assertEquals(5.0, $this->sut->floatDivide(10.0, 2.0));
        $this->assertEquals(1.9999999999, $this->sut->floatDivide(24.4000000000000, 12.2000000001));
    }
}
