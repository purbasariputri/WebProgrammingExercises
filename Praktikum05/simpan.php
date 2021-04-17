<?php
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tgllhr = $_POST['tgllhr'];
	$tmptlhr = $_POST['tmptlhr'];

	if (empty($nim) || empty($nama) || empty($tgllhr) || empty($tmptlhr)) {
		echo "Lengkapi <a href='tambahdata.html'>Form</a>!";
	} else {
		$namaFile = "datamhs.dat";
		$myfile = fopen($namaFile, "a");
		fwrite($myfile, $nim."|");
		fwrite($myfile, $nama."|");
		fwrite($myfile, $tgllhr."|");
		fwrite($myfile, $tmptlhr."\n");
		fclose($myfile);
		echo "Data telah ditambahkan";
	}
?>
