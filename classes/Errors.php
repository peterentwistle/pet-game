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

class Errors {

	public static function error() {
		echo "Error: That error doesn't exist!";
	}

	public static function animalnotfound() {
		echo "Error: That animal doesn't exist!<br />
			Please choose one from the dropdown menu.";
	}

}
?>