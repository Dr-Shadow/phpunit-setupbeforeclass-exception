<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class MyTestWithNormalThrows extends TestCase
{
	public function test_something_with_error(): void
	{
		throw new \Exception("An error in the test!");
		self::assertTrue(true);
	}
}