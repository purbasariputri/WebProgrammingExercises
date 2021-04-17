<!DOCTYPE html>
<html>
<head>
	<title>Project Latihan</title>
</head>
<body>
	<?php
		$namaFile = "datatabung.dat";
		$datamhs = fopen($namaFile, "r") or die("File tidak bisa dibuka");
		echo "<h3>DATA UKURAN TABUNG</h3>";
		echo "<table border='2'>";
		echo "<tr>";
			echo "<td>NAMA TABUNG</td><td>DIAMETER</td><td>TINGGI</td><td>LUAS</td>";
		echo "<tr>";
		while (!feof($datamhs)) {
			// mengambil isi file baris per baris
			$baca = fgets($datamhs);
			// memecah data
			$pisah = explode(",", $baca);
			echo "<tr>";
				echo "<td>".$pisah[0]."</td>";
				echo "<td>".$pisah[1]."</td>";
				echo "<td>".$pisah[2]."</td>";
				// membuat hyperlink untuk melihat luas tabung
				echo "<td><a href='hitungluas.php?n=".$pisah[0]."&d=".$pisah[1]."&t=".$pisah[2]."'>view</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	?>
</body>
</html>
