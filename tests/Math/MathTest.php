<?php


namespace App\tests\Components\Math;

use App\Components\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function testSum()
    {

        $this->assertSame(0,Math::sum(0,0));
        $this->assertSame(1,Math::sum(1,0));
        $this->assertSame(1,Math::sum(0,1));
        $this->assertSame(2,Math::sum(1,1));
        $this->assertSame(0,Math::sum(-1,1));


    }
//    public function testSum2()
//    {
//
//        $this->assertSame(0,Math::sum(0,0));
//        $this->assertSame(1,Math::sum(1,0));
//        $this->assertSame(1,Math::sum(0,1));
//        $this->assertSame(2,Math::sum(1,1));
//        $this->assertSame(0,Math::sum(-1,1));
//
//
//    }
//    public function testInvalid()
//    {
//        $this->assertSame(0,Math::sum(0,1));
//    }

    protected function tearDown()
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }


}