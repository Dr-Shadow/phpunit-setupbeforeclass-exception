<?php

namespace Blademf\PhpUnitSetupException;

class ClassThatThrows
{
	public static function throwIt():void
	{
		throw new \Exception("An error has ocurred!");
	}
}