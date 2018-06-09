<?php
namespace App\ES;

class ExpertSystem{
	private $inferenceEngine;
	private $knowledgeBase;
	private $workMemory;

	public function __construct(InferenceEngine $inferenceEngine, KnowledgeBase $knowledgeBase, WorkMemory $workMemory){
		$this->inferenceEngine = $inferenceEngine;
		$this->knowledgeBase = $knowledgeBase;
		$this->workMemory = $workMemory;
	}

	private function recognitionAndAction(){
		/**
		 * Obtiene el conjunto de conflicto. Formado por
		 * las reglas que se verifican en un momento  dado
		 */
		$conflictRulesGroup = $this->inferenceEngine->getConflictGroup();
		/**
		 * Si hay reglas que se verifiquen se puede
		 * seguir encadenando. Si no hay no se puede,
		 * por que no hay nada que encadenar.
		 */
		if(count($conflictRulesGroup)){
			/**
			 * Utiliza la estrategia de resolución de conflictos
			 * del motor de inferencia para elegir una regla
			 */
			$selectedRule = $this->inferenceEngine->resolveConflict($conflictRulesGroup);
			/**
			 * Dispara la regla elegida
			 */
			$this->inferenceEngine->trigger($selectedRule);

			return true;
		}else{
			return false;
		}
	}

	public function run(){
		try{
			/**
			 * Realiza inferencias hasta que
			 * llega a verificar la conclusión
			 * o hasta que ya no puede disparar reglas
			 */
			while($this->recognitionAndAction());
		}catch(ConclutionVerifiedException $ex){
			/**
			 * Se verifica el hecho objetivo
			 */
			return true;
		}

		/**
		 * Información insuficiente, no se verifica
		 * el hecho objetivo
		 */
		return false;
	}

}