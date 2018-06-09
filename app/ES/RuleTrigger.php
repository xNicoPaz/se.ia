<?php
namespace App\ES;

class RuleTrigger{
	private $chainingMode;

	/**
	 * El activador de reglas puede funcionar
	 * con encadenamiento hacia adelante o con
	 * encadenamiento hacia atras.
	 */
	const FORWARD_CHAINING_MODE = 1;
	const BACKWARD_CHAINING_MODE = 2;

	/**
	 * Al instanciar el disparador de reglas,
	 * se debe especificar el modo de encadenamiento
	 * con el que funcionara.
	 */
	public function __construct($chainingMode){
		$this->chainingMode = $chainingMode;
	}

	public function chaining(){
		if($chainingMode === self::FORWARD_CHAINING_MODE){
			$this->forwardChaining();
		}else{
			$this->backwardChaining();
		}
	}

	private function forwardChaining(){
		/**
		 * Determina para cuales reglas son verdaderos todos los antecedentes
		 * Si las tiene
		 * 	Obtiene el consecuente de cada una de estas reglas
		 * 	Agrega los hechos de los consecuentes a la memoria de trabajo
		 * 	Volver al paso 1
		 * Si no
		 * 	Informar que no puede continuar
		 */
	}

	private function backwardChaining(){
		/**
		 * Este esta mas salado
		 */
	}
}