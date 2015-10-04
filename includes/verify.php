<?php

	/**
	 * Verification routines return an array:
	 *
	 * array ("errors" => (if errors exist),
	 *	  "errorList" => Each error message,
	 *	 )
         **/

	function verifyInt($inputiString) {
		
		if (ctype_digit($inputString)) {
			return $inputString;
		} else {
			return FASLE;
		}

	}

	function verifySelect($input, $acceptedValues) {



	}

