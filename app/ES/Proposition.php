<?php
namespace App\ES;

class Proposition{
	/**
	 * El hecho de la proposicion
	 */
	private $fact;
	/**
	 * El siguiente operador logico.
	 * Puede ser OR o AND
	 */
	private $nextOperator;

	/**
	 * Constantes para representar los operadores
	 * logicos permitidos
	*/
	const AND = 1;
	const OR = 2;
	const NONE = 3;

	public function __construct(Fact $fact, $nextOperator){
		$this->fact = $fact;
		$this->nextOperator = $nextOperator;
	}
}