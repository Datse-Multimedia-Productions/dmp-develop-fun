<?php

	function cuddleStress($input) {

		$cuddleStressVars = verifyCuddleStressInput($input);
		
		require_once("../view/cuddlestress.html.php");
		dispalyCuddleStress($cuddleStressVars);

	}				

	function verifyCuddleStressInput($input) {

		$action = htmlentities($input["action"]);
		$number = htmlentities($input["number"]);
		$type = htmlentities($input["type"];

		foreach ($input as $key => $value) {
			switch ($key) {
				case "action":
				case "number":
				case "type":
					unset($input[$key]);
					break;
				default:
					$errorList[] = "Unexpected key $key with value $value";
					$errors = TRUE;
			}

		}
		

		switch ($action) {
			case "cuddleStress":
				
				$numberResult = verifyInt($number);
				if ($numberResult["errors"]) {
					foreach ($numberResult["errorList"] as $error) {
						$errorList[] = $error;
						$errors = TRUE;
					}
				}
				$
				
				$typeResult = verifySelect($type, $validTypes);
				break;
		

?>
