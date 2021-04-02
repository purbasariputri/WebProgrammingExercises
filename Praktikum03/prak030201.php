<?php
	function hitungGaji($gol, $masaKerja){
		if($gol == "A"){
			if($masaKerja < 10){
				$gaji = 5000000;
			} else {
				$gaji = 7000000;
			}
		} elseif ($gol == "B") {
			if ($masaKerja < 10){
				$gaji = 6000000;
			} else {
				$gaji = 8000000;
			}
		}
		return $gaji;
	}

	echo "Gaji Golongan A dan Masa Kerja 8 tahun adalah Rp." . hitungGaji("A", 8) . "<br>";
	echo "Gaji Golongan A dan Masa Kerja 12 tahun adalah Rp." . hitungGaji("A", 12) . "<br>";
	echo "Gaji Golongan B dan Masa Kerja 5 tahun adalah Rp." . hitungGaji("B", 5) . "<br>";
	echo "Gaji Golongan B dan Masa Kerja 14 tahun adalah Rp." . hitungGaji("B", 14);
?>