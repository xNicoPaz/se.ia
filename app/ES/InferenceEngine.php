<?php
namespace App\ES;

class InferenceEngine{
	private $ruleTrigger;

	/**
	 * El motor de inferencia contiene un activador de
	 * reglas, el cual por defecto funcionara con 
	 * encadenamiento hacia adelante.
	 */
	public function __construct($chainingMode = RuleTrigger::FORWARD_CHAINING_MODE){
		$this->ruleTrigger = new RuleTrigger($chainingMode);
	}

	public function getConflictGroup(WorkMemory $WorkMemory){

	}

	public function resolveConflict(ProductionRules ...$conflictGruoup){
		
	}
}