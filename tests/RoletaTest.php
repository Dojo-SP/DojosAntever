<?php 

// Por exemplo quando n = 5, k = 2 e i = 1, 
// a ordem de execuções é 3, 5, 2, e 1. 
// O sobrevivente é 4.

// onde:
// n = numero de pessoas na roleta
// k = tamanho do salto
// i = primeira pessoa a morrer

// a quantidade de saldo K não conta o que morreu

class RoletaTest extends \PHPUnit_Framework_TestCase
{

	public function testUmaPessoaNinguemMorre()
	{
		$this->assertEquals(1, (new Roleta)->sobrevivente(1, 1, 1));
	}
	

	public function testDoisDoisUm()
	{
		$this->assertEquals(2, (new Roleta)->sobrevivente(2, 2, 1));

	}


}
