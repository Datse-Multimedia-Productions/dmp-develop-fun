<?php

  error_reporting(E_ALL);

  require_once('header.php');

  echo '
		<p>This calculates the Cuddle Coeficent or the Stress Coeficient</p>

		<form action="'.$_SERVER["SCRIPT_FILENAME"].'">
			Type:<br />
			<input type="radio" name="type" value="cuddling">Cuddlers<br />
			<input type="radio" name="type" value="stressers">People<br />
			Number of Cuddlers, or People: 
			<input type="text" name="cuddlers" value="'.$cuddlers.'"><br />
			<input type="submit" value="Submit">

';
  require_once('footer.php');
?>
