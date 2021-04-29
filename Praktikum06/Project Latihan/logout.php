<?php

setcookie("username", "", time()-3600);
setcookie("acak", "", time()-3600);
header("Location:login.php");

?>