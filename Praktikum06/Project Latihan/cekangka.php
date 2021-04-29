<?php

$acak = $_COOKIE['acak'];

if (isset($_POST['submit'])) {

	$angka = $_POST['tebak'];

	if ($angka < $acak) {
		echo "<p>Wah.. masih salah ya, bilangan tebakan Anda terlalu rendah</p>";

?>

	<p>Hallo, Nama Saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
	<form method="post" action="cekangka.php">
		Bilangan tebakan Anda : <input type="text" name="tebak">
		<input type="submit" name="submit" value="Cek">
	</form>

<?php

	} elseif ($angka > $acak) {
		echo "<p>Wah.. masih salah ya, bilangan tebakan Anda terlalu tinggi</p>";

?>

	<p>Hallo, Nama Saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
	<form method="post" action="cekangka.php">
		Bilangan tebakan Anda : <input type="text" name="tebak">
		<input type="submit" name="submit" value="Cek">
	</form>

<?php

	} else {
		echo "<p>Selamat ya.. Anda benar, saya telah memilih bilangan ".$acak."</p>";
		echo "<a href='game.php'><button type='submit' name='mulai'>Ulangi Lagi</button></a><br>";
		echo "<a href='logout.php'><button>Keluar</button></a>";
	}

}

?>