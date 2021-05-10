<?php

session_start();

$lives = $_SESSION['lives'];
$score = $_SESSION['score'];

$nama = $_COOKIE['nama'];
$bil1 = $_COOKIE['bil1'];
$bil2 = $_COOKIE['bil2'];
$jawaban = $_COOKIE['jawaban'];
// ketika menerima post 'submit'
if (isset($_POST['submit'])) {
	$jawab = $_POST['jawab'];
	// ketika jawaban salah
	if ($jawab != $jawaban) {
		$lives--;
		$score = $score - 2;

		$_SESSION['lives'] = $lives;
		$_SESSION['score'] = $score;
		// ketika lives = 0 maka game selesai (game over)
		if ($lives <= 0) {
			header("Location:gameover.php");
		} else {
			// tampilan ketika jawaban salah
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
					<p>Halo <?php echo $nama; ?>, sayang jawaban kamu salah. Tetap semangat ya!</p>
					<p>Lives : <?php echo $lives; ?> | Score : <?php echo $score; ?></p>
					<div class="form-group">
						<a href="game.php"><button type='submit' name='next' class="btn btn-primary btn-block">Soal selanjutnya</button></a>
					</div>
				</div>
			</div>
			</body>
			</html>
			<?php
		}
	// ketika jawaban benar
	} elseif ($jawab == $jawaban) {
		// lives tetap
		$lives = $lives;
		// score bertambah 10
		$score = $score + 10;

		$_SESSION['lives'] = $lives;
		$_SESSION['score'] = $score;
		// tampilan ketika jawaban benar
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
				<p>Halo <?php echo $nama; ?>, selamat jawaban kamu benar!</p>
				<p>Lives : <?php echo $lives; ?> | Score : <?php echo $score; ?></p>
				<div class="form-group">
					<a href="game.php"><button type='submit' name='next' class="btn btn-primary btn-block">Soal selanjutnya</button></a>
				</div>
			</div>
		</div>
		</body>
		</html>
		<?php
	}
}

?>