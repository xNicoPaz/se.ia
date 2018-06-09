<?php
namespace App\ES;

/**
 * Esta formada por reglas de producción
*/
class KnowledgeBase{
	public $rules;

	public function __construct(ProductionRule ...$rules){
		$this->rules = $rules;
	}
}