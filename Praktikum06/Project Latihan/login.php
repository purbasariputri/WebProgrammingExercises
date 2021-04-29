<?php
// bagian yang dieksekusi ketika pengunjung submit nama
if (isset($_POST['submit'])){
	// mengeset cookie username dari namanya
	setcookie("username", $_POST['username'], time()+3600);
	// setelah mengeset cookie awal di atas, redirect ke halaman depan game.php
	header("Location:game.php");
}
// jika sudah ada cookie username
if (isset($_COOKIE['username'])){
	// tampilkan nama user, baca dari cookie
	echo "<h2>Permainan Tebak Angka</h2>";
	echo "<p>Hallo Selamat Datang, ".$_COOKIE['username']."!</p>";
	echo "<a href='game.php'><button type='submit' name='mulai'>Mulai Permainan</button></a><br>";
	echo "<a href='logout.php'><button>Keluar</button></a>";
} else {
	// jika cookie username belum ada, munculkan form
?>
	<h2>Permainan Tebak Angka</h2>
	<p>Hallo Selamat Datang, Silakan Isi Namamu!</p>
	<form method="post" action="login.php">
		Nama : <input type="text" name="username">
		<input type="submit" name="submit" value="Submit">
	</form>
<?php	
}
?>