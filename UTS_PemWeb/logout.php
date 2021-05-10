<?php

session_start();
// menghapus session
session_unset();
session_destroy();
// menghapus cookie
setcookie("nama", "", time()-3*30*24*3600);
setcookie("email", "", time()-3*30*24*3600);
setcookie("bil1", "", time()-3*30*24*3600);
setcookie("bil2", "", time()-3*30*24*3600);
setcookie("jawaban", "", time()-3*30*24*3600);

header("Location:index.php");

?>