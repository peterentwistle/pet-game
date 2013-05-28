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