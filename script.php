<?php
	header("content-type:application/json");
	$cnt = 0;

	function checkPrime($num) {

		if ($num == 1)
		{
			return false;
		}
		elseif ($num == 2)
		{
			return true;
		}

		if ($num % 2 == 0) {
			return false;
		}

		for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
			if ($num % $i == 0) {
				return false;
			}
		}

		return true;
	}

	for($i = 2; $cnt < 1000; $i++) {
		if (checkPrime($i)) {
			$primes[$cnt] = $i;
			$cnt++;
		}
	}

	echo json_encode($primes);
?>


