<?php
namespace App\ES;

/**
 * Esta formada por hechos
 */
class WorkMemory{
	public $facts;

	public function __construct(Fact ...$facts){
		$this->facts = $facts;
	}

	/**
	 * Devuelve el Fact de la WorkMemory que coincida
	 * con el Fact proporcionado. Esto es tener el mismo
	 * object y el mismo atribute. Devuelve false si no se
	 * encontro en la WorkMemory un Fact que coincida.
	 */
	public function getMatchingFact(Fact $assumption){
		foreach($this->facts as $fact) {
			if($fact->object == $assumption->object && $fact->atribute == $assumption->atribute){
				return $fact;
			}
		}
		return false;
	}


	public function addFact(Fact $truth){
		array_push($this->facts, $truth);
	}

	public function addFacts(Fact ...$truths){
		foreach($truths as $truth){
			addFact($truth);
		}
	}
}