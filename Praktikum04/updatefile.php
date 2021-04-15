<?php
	$namaFile = "myfile.txt";
	$myfile = fopen($namaFile, "a") or die("Tidak bisa buka file!");
	fwrite($myfile, "DOS = Disk Operating System\n");
	fclose($myfile);
?>