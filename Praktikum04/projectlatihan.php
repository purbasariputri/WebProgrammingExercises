<!DOCTYPE html>
<html>
<head>
	<title>Project Latihan</title>
</head>
<body>
	<?php
		function usia($tanggalLahir){
			$tanggalSekarang = date('Y-m-d');
			// memecah tanggal, bulan, tahun sekarang
			$pecah1 = explode("-", $tanggalSekarang);
			$date1 = $pecah1[2];
			$month1 = $pecah1[1];
			$year1 = $pecah1[0];
			// memecah tanggal, bulan, tahun lahir
			$pecah2 = explode("-", $tanggalLahir);
			$date2 = $pecah2[2];
			$month2 = $pecah2[1];
			$year2 =  $pecah2[0];
			// menghitung jumlah hari sejak tahun 0 masehi
			$jd1 = GregorianToJD($month1, $date1, $year1);
			$jd2 = GregorianToJD($month2, $date2, $year2);
			// menghitung selisih hari
			$selisih = $jd1 - $jd2;
			// menghitung usia dan dibulatkan ke atas
			$usia = ceil($selisih/365);
			return $usia;
		}

		$namaFile = "datamhs.dat";
		$datamhs = fopen($namaFile, "r") or die("File tidak bisa dibuka");
		echo "<center>";
		echo "<h3>DATA MAHASISWA</h3>";
		echo "<table border='2'>";
		echo "<tr>";
			echo "<td>No</td><td>NIM</td><td>Nama Mahasiswa</td><td>Tanggal Lahir</td><td>Tempat Lahir</td><td>Usia</td>";
		echo "<tr>";
		$nomor = 1;
		while (!feof($datamhs)) {
			// mengambil isi file baris per baris
			$baca = fgets($datamhs);
			// memecah data
			$pisah = explode("|", $baca);
			echo "<tr>";
				echo "<td>".$nomor."</td>";
				echo "<td>".$pisah[0]."</td>";
				echo "<td>".$pisah[1]."</td>";
				echo "<td>".$pisah[2]."</td>";
				echo "<td>".$pisah[3]."</td>";
				echo "<td>".usia($pisah[2])."</td>";
			echo "</tr>";
			$nomor++;
		}
		echo "</table>";
		echo "<br>";
		echo "Jumlah Data : ".($nomor-1);
		echo "</center>";
		fclose($datamhs);
	?>
</body>
</html>