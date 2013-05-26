<?php
class Commands {

	public function help($chosenAnimal) {
		
		$commandArray = $chosenAnimal::listActions();

		$cmds = "";
		$length = count($commandArray);
		echo "<p>Here are the commands:</p>";
		for ($i = 0; $i < $length; $i++) {
			$cmds .= "<p>/".$commandArray[$i]."</p>";
		}
		echo $cmds;
	}

}

?>