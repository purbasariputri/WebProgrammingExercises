<?php

session_start();
// memberikan nilai awal lives 5 dan score 0
if (!isset($_SESSION['lives'])) {
	$_SESSION['lives'] = 5;
	$_SESSION['score'] = 0;	
}

$nama = $_COOKIE['nama'];
// random angka dan membuat cookie untuk angka
$bil1 = random_int(0, 20);
$bil2 = random_int(0, 20);
setcookie("bil1", $bil1, time()+3*30*24*3600);
setcookie("bil2", $bil2, time()+3*30*24*3600);
// menghitung jawaban
$jawaban = $bil1 + $bil2;
setcookie("jawaban", $jawaban, time()+3*30*24*3600)

?>

<!DOCTYPE html>
<html>
<head>
	<title>Mathematics Game</title>
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

<?php

$lives = $_SESSION['lives'];
$score = $_SESSION['score'];

?>

<div class="login-form">
	<!-- membuat form untuk memasukkan jawaban player -->
	<form method="post" action="jawaban.php">
		<p>Halo <?php echo $nama; ?>, semangat ya!<br>You can do the best!</p>
		<p>Lives : <?php echo $lives; ?> | Score : <?php echo $score; ?></p>
		<p>Berapakah <?php echo $bil1; ?> + <?php echo $bil2; ?> ?</p>
			<div class="form-group">
				<input class="form-control" placeholder="Masukkan Jawaban" type="text" name="jawab" required>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block">
			</div>
	</form>
</div>

</body>
</html>