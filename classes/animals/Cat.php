<?php
class Cat extends Animal {

	const legs = 4;

	public static function listActions() {
		return array('stroke', 'feed', 'play', 'treat');
	}

	public static function greet() {
		echo "Meow!";
	}

	public static function stroke($animalName) {
		echo "You just stroked ".$animalName."'s head.";
	}

	public static function feed($animalName) {
		echo $animalName." is now full.";
	}

	public static function play($animalName) {
		echo "You just played with your cat ".$animalName.".";
	}

	public static function treat($animalName) {
		echo "You have just given ".$animalName." a delicious cat treat!";
		
	}

}
?>