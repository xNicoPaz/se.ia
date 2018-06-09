<?php
namespace App\ES;
/**
 * Un fact es una proposición atomica
 */
class Fact{
	/**
	 * El objeto
 	 */
	public $object;
	/**
	 * El el atributo del objeto.
	 */
	public $atribute;
	/**
	 * El valor del atributo
	 */
	public $value;

	public function __construct($object, $atribute, $value){
		$this->object = $object;
		$this->atribute = $atribute;
		$this->value = $value;
	}

	/**
	 * Compara si un hecho es igual al hecho en si mismo
	 */
	public function isTrue(Fact $reality){
		return $reality->object == $this->object && $reality->atribute == $this->atribute && $reality->value == $this->value;
	}
}