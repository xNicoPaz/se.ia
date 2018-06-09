<?php
namespace App\ES;

/**
 * Las reglas de producción, o tambien llamadas "reglas de inferencia",
 * son pares (antecendente, consecuente). Ambos componentes del par no
 * son mas que cadenas de proposiciones unidas por AND y OR. Estas
 * proposiciones o hechos representan conceptos, datos, objetos, etc
 * y en su conjunto constituyen la base de hechos. 
 */
class ProductionRule{
	/**
	 * Antecente
	 *
	 * Este es un conjunto de condiciones, por eso es un array
	 */
	public $premises = [];
	
	/**
	 * Consecuente
	 *
	 * Este es un conjunto de acciones, por eso es un array
	*/	
	public $conclusions = [];

	/**
	 * Funciones para implementación
	*/

	private function or($proposition1, $proposition2){
		return $proposition1 || $proposition2;
	}

	private function and($proposition1, $proposition2){
		return $proposition1 && $proposition2;
	}


	public function assert(){
		$i = 0;
		$acumulatorOfTruth = $premises[0]->isTrue;
		while($i < count($premises) -1){
			$valueOfTruth1 = $premises[i];
			// $vañie
		}
	}

	public function __construct($primeses, $conclusions){
		$this->premises = $premises;
		$this->conclusions = $conclusions;
	}
}