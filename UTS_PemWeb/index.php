<?php
// bagian yang dieksekusi ketika pengunjung submit nama
if (isset($_POST['submit'])){

	setcookie("nama", $_POST['nama'], time()+3*30*24*3600);
	setcookie("email", $_POST['email'], time()+3*30*24*3600);

	header("Location:game.php");
}
// jika sudah ada cookie 'nama'
if (isset($_COOKIE['nama'])){

	session_start();

	$_SESSION['lives'] = 5;
	$_SESSION['score'] = 0;

	$lives = $_SESSION['lives'];
	$score = $_SESSION['score'];

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
	
	<div class="login-form">
		<div class="login-form-square">
			<h3 class="text-center">Mathematics Game</h3>
			<p class="text-center">Halo <?php echo $_COOKIE['nama']; ?>, selamat datang kembali di permainan ini!</p>
			<div class="form-group">
				<a href='game.php'><button type='submit' name='mulai' class="btn btn-primary btn-block">Mulai Permainan</button></a>
			</div>
			<p class="text-center">Bukan kamu? <a href="inputPlayer.php">Klik disini</a></p>
		</div>
	</div>

	</body>
	</html>

	<?php

} else {
// jika cookie nama belum ada, memunculkan form	untuk memasukkan nama dan email
?>	
	<!DOCTYPE html>
	<html>
	<head>
		<title>Halaman Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		
	<div class="login-form">
		<form method="post" action="index.php">
			<h3 class="text-center">Mathematics Game</h3>
			<br>
			<p>Halo selamat datang!</p>
				<div class="form-group">
					<input class="form-control" placeholder="Masukkan Nama" type="text" name="nama" required>
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Masukkan Email" type="email" name="email" required>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block">
				</div>
		</form>
	</div>

	</body>
	</html>
<?php
}
?>