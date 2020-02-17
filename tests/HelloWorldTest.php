<?php

use PHPUnit\Framework\TestCase;
use function Silarhi\hello;

final class HelloWorldTest extends TestCase
{
	public function testHello()
    {
    	$contents = hello();
        $this->assertEquals('Hello World v1.1.0', $contents);
    }
}