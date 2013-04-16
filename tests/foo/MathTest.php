<?php

use foo\Math;
use foo\AbstractTest as AbstractTest;

class MathTest extends AbstractTest
{
    public function testInstantiationWithoutArgumentsShouldWork(){
        $this->instance = new Math();
        $this->assertInstanceOf('foo\Math', $this->instance);
    }

    /**
    * @depends testInstantiationWithoutArgumentsShouldWork
    */
    public function test00WithValidDataShouldWork()
    {
       $this->assertEquals($this->instance->calc((int)0,(int)0),0);
    }

    /**
    * @depends testInstantiationWithoutArgumentsShouldWork
    */
    public function test10WithValidDataShouldWork()
    {
       $this->assertEquals($this->instance->calc((int)1,(int)0),0);
    }

    /**
    * @depends testInstantiationWithoutArgumentsShouldWork
    */
    public function test01WithValidDataShouldWork()
    {
       $this->assertEquals($this->instance->calc((int)0,(int)1),0);
    }

    /**
    * @depends testInstantiationWithoutArgumentsShouldWork
    */
    public function test11WithValidDataShouldWork()
    {
       $this->assertEquals($this->instance->calc((int)1,(int)1),1);
    }
}