<?php
class Parrot extends Animal {

	const legs = 2;

	public static function listActions() {
		return array('stroke', 'feed', 'treat');
	}

	public static function greet() {
		echo "Polly want a carrot?";
	}

	public static function stroke($animalName) {
		echo "You just stroked ".$animalName."'s head.";
	}

	public static function feed($animalName) {
		echo $animalName." is now full.";
	}

	public static function treat($animalName) {
		echo "You have just given ".$animalName." a delicious treat!";
		
	}

}
?>