<?php
class Horse extends Animal {

	const legs = 4;

	public static function listActions() {
		return array('stroke', 'feed', 'ride', 'treat');
	}

	public static function greet() {
		echo "Nay!";
	}

	public static function stroke($animalName) {
		echo "You just stroked ".$animalName."'s head.";
	}

	public static function feed($animalName) {
		echo $animalName." is now full.";
	}

	public static function ride($animalName) {
		echo "You have just taken ".$animalName." for a ride.";
	}

	public static function treat($animalName) {
		echo "You have just given ".$animalName." a delicious apple!";
		
	}

}
?>