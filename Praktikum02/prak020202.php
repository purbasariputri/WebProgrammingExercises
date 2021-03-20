<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<?php  
		$baris = 4;
		$kolom = 5;
		echo "<table border='1'>";
		$j = 1;
		for ($i=1; $i<=$baris; $i++) { 
			echo "<tr>";
			while ($j<=20) {
				if($j % $kolom == 0){
					echo "<td>".$j."</td>";
					$j++;
					break;
				}
				echo "<td>".$j."</td>";
				$j++;
			}	
			echo "</tr>";
		}
		echo "</table>";
	?>
</body>
</html>