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
					if ($j % 2 == 0) {
						echo "<td bgcolor='red'><font color='white'>".$j."</font></td>";
					} else {
						echo "<td><font color='red'>".$j."</font></td>";
					}
					$j++;
					break;
				}
				if ($j % 2 == 0) {
					echo "<td bgcolor='red'><font color='white'>".$j."</font></td>";
				} else {
					echo "<td><font color='red'>".$j."</font></td>";
				}
				$j++;
			}	
			echo "</tr>";
		}
		echo "</table>";
	?>
</body>
</html>