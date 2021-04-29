<?php
session_start();
include('cek.php');

echo "<h1>Page 1</h1>";
// menampilkan nama lengkap usernya
echo "<p>Selamat datang ".$_SESSION['namauser']."</p>";

echo "<h2>Menu Utama</h2>";
echo "<p><a href='page1.php'>Page 1</a> | <a href='page2.php'>Page 2</a> | <a href='page3.php'>Page 3</a> | <a href='logout.php'>Logout</a></p>";
?>