<?php 
class Dog extends Animal {

	const legs = 4;

	public static function listActions() {
		return array('stroke', 'feed', 'walk', 'treat');
	}

	public static function greet() {
		echo "Woof!";
	}

	public static function stroke($animalName) {
		echo "You just stroked ".$animalName."'s head.";
	}

	public static function feed($animalName) {
		echo $animalName." is now full.";
	}

	public static function walk($animalName) {
		echo "You have just taken ".$animalName." for a long walk.";
	}

	public static function treat($animalName) {
		echo "You have just given ".$animalName." a delicious dog treat!";
		
	}

}
?>