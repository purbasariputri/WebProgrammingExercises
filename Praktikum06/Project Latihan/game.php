<!DOCTYPE html>
<html>
<head>
	<title>Tebak Angka</title>
</head>
<body>

<?php

$acak = rand(0, 100);
setcookie("acak", $acak, time()+3600);

?>

	<p>Hallo, Nama Saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
	<form method="post" action="cekangka.php">
		Bilangan tebakan Anda : <input type="text" name="tebak">
		<input type="submit" name="submit" value="Cek">
	</form>

</body>
</html>