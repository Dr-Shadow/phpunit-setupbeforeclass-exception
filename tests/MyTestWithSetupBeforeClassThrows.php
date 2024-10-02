<?php

namespace Tests;

use Blademf\PhpUnitSetupException\ClassThatThrows;
use PHPUnit\Framework\TestCase;

class MyTestWithSetupBeforeClassThrows extends TestCase
{
	public static function setUpBeforeClass():void
	{
		ClassThatThrows::throwIt();
	}

	public function test_something():void{
		self::assertTrue(true);
	}
}
