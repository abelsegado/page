<?php
//logout.php
unset($_COOKIE['id']);
setcookie("id","",time()+36000,"/page/");
header("location:login.php");

?>