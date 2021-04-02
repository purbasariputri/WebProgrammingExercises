<?php
	function buatBintang($n){
		echo "<pre>";
		for ($i=1; $i<=$n; $i++) { 
			for ($j=$n; $j>=$i; $j-=1) { 
				echo "*";
			}
			echo "\n";
		}
		echo "<pre>";
	}
	buatBintang(4);
?>