<?php

class koneksiDB{
	function getKoneksi(){
		$host = "localhost";
		$username = "root";
		$pass = "";
		$db = "universitas";
		$konek = mysqli_connect($host, $username, $pass, $db) or die("Koneksi gagal ".mysqli_connect_error());

		if (mysqli_connect_errno()) {
			exit();
		}
		return $konek;
	}
}

?>