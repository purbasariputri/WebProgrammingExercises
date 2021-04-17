<?php
	$nama = $_GET['n'];
	$diameter = $_GET['d'];
	$tinggi = $_GET['t'];

	$jarijari = $diameter / 2;
	$luas = 2 * 3.14 * $jarijari * ($jarijari + $tinggi);

	echo "Luas tabung ".$nama." dengan diameter ".$diameter." dan tinggi ".$tinggi." adalah ".$luas." satuan luas";
?>
