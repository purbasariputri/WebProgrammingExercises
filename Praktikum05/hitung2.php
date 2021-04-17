<?php
	// baca kedua bilangan
	$bil1 = $_POST['bil1'];
	$bil2 = $_POST['bil2'];

	// proses perhitungan
	if (isset($_POST['penjumlahan'])){
		$op = "+";
		$hasil = $bil1 + $bil2;
	} else if (isset($_POST['pengurangan'])){
		$op = "-";
		$hasil = $bil1 - $bil2;
	} else if (isset($_POST['perkalian'])){
		$op = "x";
		$hasil = $bil1 * $bil2;
	} else if (isset($_POST['pembagian'])){
		$op = "/";
		$hasil = $bil1 / $bil2;
	} else if (isset($_POST['pangkat'])){
		$op = "^";
		$hasil = $hasil = pow($bil1, $bil2);
	}
	// menampilkan hasil perhitungan
	echo "<h2>".$bil1." ".$op." ".$bil2." = ".$hasil."</h2>";
?>
