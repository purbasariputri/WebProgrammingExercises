<?php

session_start();

$score = $_SESSION['score'];

$nama = $_COOKIE['nama'];
$email = $_COOKIE['email'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Mathematics Game</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<!-- tampilan ketika permainan selesai (game over) -->
<div class="login-form">
	<div class="login-form-square">
		<p>Halo <?php echo $nama; ?>, sayang permainan sudah selesai. <br>Semoga lain kali bisa lebih baik!</p>
		<p>Score kamu : <?php echo $score; ?></p>
		<div class="form-group">
			<a href="index.php"><button class="btn btn-primary btn-block">Main lagi</button></a>
		</div>
		<div class="form-group">
			<a href="logout.php"><button class="btn btn-primary btn-block">Keluar</button></a> 
		</div>
	</div>
</div>
<?php

include_once("config.php");
// input data nama, email, dan score ke mysql tabel halloffame
$input = mysqli_query($conn, "INSERT INTO halloffame(nama, email, score) VALUES ('$nama', '$email', '$score')");
// mengambil semua dara dari tabel halloffame yang diurutkan berdasarkan score secara descending (besar ke kecil)
$result = mysqli_query($conn, "SELECT * FROM halloffame ORDER BY score DESC");

?>
<!-- menampilkan tabel hall of fame (10 players dengan skor tertinggi) -->
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Peringkat Teratas</h2></b></div>
                </div>
            </div>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Score</th>
					</tr>
				</thead>
				<tbody>
					<tr>
			<?php
					$no = 0;

					while ($data = mysqli_fetch_array($result)) {
						$no++;
						?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['score']; ?></td>
						</tr>
						<?php
						if ($no == 10) {
							break;
						}
					}
			?>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

</body>
</html>