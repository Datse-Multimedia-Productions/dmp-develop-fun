<?php 

class cuddleStress {

	public $number;
	public $type;i


	/**
	 * Calculate the value of:
	 * sum $m from 1 to $number of combinations (n,m)
         **/
	public function calculate ($number, $type) {

		$n=$number;

		for ($m=1; $m<=$n; $m++) {
			echo 'm: '.$m;
			echo 'n: '.$n;
			$combinations = combinations($n,$m);
			echo 'm chose n: '.$combinations;
			$sum += $combinations;
			echo 'sum: '.$sum;
		}

	}

	/**
	 * Calculate the combinations of set m with n elements chosen
	 **/

	public function combinations($n, $m) {

		$combinations = factoral($n)/factoral($m)*factoral($m-n);

		return $combinations;

	}

	public function factoral($n) {
	
		$factoral=1;
		
		for ($m=$n; $m>1; $m--) {
			$factoral = $factoral*$m;
		}

		return $factoral;

	}

}
