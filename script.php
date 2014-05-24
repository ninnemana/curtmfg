
<?php
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
	
	echo "<table><tr><td>-</td>";
	$cnt = 0;
	for ($i = 0; $i < 1000; $i++) {
		$n = $primes[$i];
		if ($cnt == 10) {
			echo "</tr><tr><td>". $n . "</td>";
			$cnt = 0;
		} else {
			echo "<td>". $n . "</td>";
			$cnt++;
		}
	}	
	echo "</tr></table>";
	

	
?>

	
