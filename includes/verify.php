<?php

	function verifyInt($inputiString) {
		
		if (ctype_digit($inputString)) {
			return $inputString;
		} else {
			return FASLE;
		}

	}



