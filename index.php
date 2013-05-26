<?php
session_start();

function __autoload($class_name) {
	$classes = 'classes/'.$class_name . '.php';
	$classes_animals = 'classes/animals/'.$class_name . '.php';
	if (file_exists($classes)) {
		include_once $classes;
	} else {
		include_once $classes_animals;
	}
      
}

// Array of all animals
$animals = array('Dog', 'Cat', 'Horse', 'Parrot', 'Goldfish');


if (isset($_GET['a'])) {

	$chosenAnimal = strip_tags($_GET['a']);

	$length = count($animals);

	// Loop through all of the animals in our list to see if the one requested exists
	// If it does then break out of the loop and continue else return false
	for ($i = 0; $i < $length; $i++) {
		if ($chosenAnimal == $animals[$i]) {
			$animalExists = true;
			break;
		} else {
			$animalExists = false;
		}
	}

	if ($animalExists == true) {
		// If the animal is one of our predefined animals then set the session
		$_SESSION['a'] = $chosenAnimal;
	} else {
		header("location: ?error=animalnotfound");
	}
}

function interact($animalName, $chosenAnimal) {
	echo "
	<html>
	<head>
		<title>PetGame - Interact with ".$animalName."</title>
	</head>
	<body>
		<h1>Enter a command to interact with your pet.</h1>
		<h2>You are interacting with ".$animalName." the ".$chosenAnimal.".</h2>
		<p>(Type /help to get the list of commands)</p>
		<form action='' method='post'>Command:
			<input type='text' name='cmd'>
			<input type='submit'>
		</form>
	</body>";
}

// Do the command that was posted
if (isset($_POST['cmd'])) {
	// Need to set variables from our session
	$chosenAnimal = $_SESSION['a'];
	if (isset($_SESSION['name'])) {
		$animalName = $_SESSION['name'];

		echo interact($animalName, $chosenAnimal);

		$cmd = strip_tags($_POST['cmd']);
		// If the entered data starts with '/' remove it and run the function it needs
		if ($cmd[0] == '/') {
			$cmd = substr($cmd , 1);
			$commandList = $chosenAnimal::listActions();

			if ($cmd == 'help') {
				$commands = new Commands;
				$commands->$cmd($chosenAnimal);
			} elseif (in_array($cmd, $commandList)) {
				$commands = new Commands;
				$chosenAnimal::$cmd($animalName);
			} else {
				echo "Sorry that command is not recognised.<br />
					Please type /help for a list of commands.";
			}

		} else {
			echo "At the moment only commands that start with '/' are supported.<br />
				Please type /help for a list of commands.";
		}
	}

} elseif (isset($_POST['name'], $_GET['a'])) {
	$animalName = strip_tags($_POST['name']);
	$_SESSION['name'] = $animalName;
	echo interact($animalName, $chosenAnimal);

	$classname = $chosenAnimal;
	$newAnimal = new $classname("$animalName");
	echo $newAnimal->name;
	echo " says: ";
	$newAnimal->greet();

} elseif (isset($_GET['a'])) {

	echo "Please choose a name for your ".$chosenAnimal.":";
	echo "
		<form action='' method='post'>Name:
			<input type='text' name='name'>
			<input type='submit'>
		</form>";
} else {
?>
<html>
<head>
	<title>PetGame</title>
</head>

<body>
<h1>PetGame</h1>
<p>
<?php

if (isset($_GET['error'])) {

	$error = strip_tags($_GET['error']);
	if ($error == 'animalnotfound' ) {
		Errors::animalnotfound();
	} else {
		Errors::error();
	}
}
?>
</p>
<p>Please choose your animal:</p>
<form action="" method="get">
	<select name="a">
		<?php 
			$length = count($animals);

			for ($i = 0; $i < $length; $i++) {
				echo "<option value='".$animals[$i]."'>".$animals[$i]."</option>";
			}
		?>
		<input type="submit" value="Choose your animal!">
	</select>
</form>
</body>
</html>
<?php 
}
?>