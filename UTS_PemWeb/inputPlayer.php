<?php
// menghapus session dan cookie yang ada
session_start();
session_unset();
session_destroy();

setcookie("nama", "", time()-3*30*24*3600);
setcookie("email", "", time()-3*30*24*3600);
setcookie("bil1", "", time()-3*30*24*3600);
setcookie("bil2", "", time()-3*30*24*3600);
setcookie("jawaban", "", time()-3*30*24*3600);

if (isset($_POST['submit'])){

	setcookie("nama", $_POST['nama'], time()+3*30*24*3600);
	setcookie("email", $_POST['email'], time()+3*30*24*3600);

	header("Location:game.php");
}
//form untuk mengisi nama dan email player baru, ketika sebelumnya sudah pernah login dengan nama dan email berbeda
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
	<form method="post" action="inputPlayer.php">
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
		</table>
	</form>
</div>

</body>
</html>