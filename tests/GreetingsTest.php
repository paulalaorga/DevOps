<?php
require_once("./src/Greetings.php");
use PHPUnit\Framework\TestCase;

class GreetingsTest extends TestCase
{
	public function testHelloWorld()
	{
		$object = new Greetings();
		$this->assertEquals('Hello World', $object->sayHelloWorld());
	}
}