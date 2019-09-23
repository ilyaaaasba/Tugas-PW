<?php 
	$a = "ganjil";
	$b = "genap";
	for ($i = 1; $i <= 19; $i++) {
			$k=0;
	for ($j=1 ; $j <= $i; $j++) {
			if ($i % $j == 0) {
				$k++;
			}
	}
		if ($k == 2 && $j %2 == 0) {
			echo "Angka $i adalah bilangan $a sekaligus bilangan prima<br>";
		} elseif ($k == 2 && $j %2 ==1) {
			echo "Angka $i adalah bilangan $b sekaligus bilangan prima<br>";
		} elseif ($j %2 == 0) {
			echo "Angka $i adalah bilangan $a <br>";
		} elseif ($j %2 == 1) {
			echo "Angka $i adalah bilangan $b<br>";
		}
				
}
			


 ?>