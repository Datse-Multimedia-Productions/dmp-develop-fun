<?php

	function cuddleStress($input) {

		$cuddleStressVars = verifyCuddleStressInput($input);
		
		require_once("../view/cuddle-stress.html.php");
		dispalyCuddleStress($cuddleStressVars);

	}				

	function verifyCuddleStressInput($input) {

		$action = htmlentities($input["action"]);
		$number = htmlentities($input["number"]);
		$type = htmlentities($input["type"]);
		$errors = FALSE;
		$errorList = array();

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
					$number = "";
				}
				
				$typeResult = verifySelect($type, $validTypes);

				if ($typeResult["errors"]) {
					foreach ($numberResult["errorList"] as $error {
						$errorList[] = $error;
						$errors = TRUE;
					}

					$type = "";

				}

				break;
			default:

				$errorList[] = "Unexpected Action: $action";
				$errors = TRUE;
				$action = "cuddleStress";

		}

		return array(
			"input" => $input;
			"errors" => $errors;
			"errorList" => $errrorList;
			"action" => $action;
			"number" => $number;
			"type" => $type;
		);

	}
}
		

?>
