<?php
class Goldfish extends Animal {

	const fins = 2;

	public static function listActions() {
		return array('watch', 'feed', 'treat');
	}

	public static function greet() {
		echo "Bubble, bubble.";
	}

	public static function watch($animalName) {
		echo "You just watched ".$animalName." swim around the fishtank.";
	}

	public static function feed($animalName) {
		echo $animalName." is now full.";
	}

	public static function treat($animalName) {
		echo "You have just given ".$animalName." a delicious treat!";
		
	}

}
?>