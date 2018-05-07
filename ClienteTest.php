<?php

require 'Cliente.php';

use PHPUnit\Framework\TestCase;

Class ClienteTest extends TestCase
{
	public function testCriacaoCliente()
	{
		$cliente = new Cliente('Adriano');
		$this->assertSame('Adriano',$cliente->getNome());
	}
}