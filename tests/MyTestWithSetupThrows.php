<?php

namespace Tests;

use Blademf\PhpUnitSetupException\ClassThatThrows;
use PHPUnit\Framework\TestCase;

class MyTestWithSetupThrows extends TestCase
{
	public function setUp():void
	{
		ClassThatThrows::throwIt();
	}

	public function test_something():void{
		self::assertTrue(true);
	}
}