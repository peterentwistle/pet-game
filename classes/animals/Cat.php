<?php
/*
   Copyright 2013 Peter Entwistle

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

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