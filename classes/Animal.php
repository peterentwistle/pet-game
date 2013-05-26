<?php
class Animal {

	public $name;

	final public function __construct($name) {
		$this->name = $name;
	}

	public function moveForward() {
		// Moves animal forward by 1 step
		return "1 step forward";

	} 

}
?>