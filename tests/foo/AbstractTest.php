<?php namespace foo;

abstract class AbstractTest extends \PHPUnit_Framework_TestCase
{
	public $instance;

	protected function setUp()
    {
    	$this->instance = new Math();
    }

    protected function tearDown()
    {

    }

    public function assertPreConditions()
    {	
        $this->assertTrue(
                class_exists($class = 'foo\Math'),
                'Class not found: '.$class
        );
    }
}
