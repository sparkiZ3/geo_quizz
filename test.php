<?php  
$test= 'apagnan';
include 'lst_flags.php';
$flag = $liste_pays[2];
echo $pays[$flag];
echo strtoupper($test);
setcookie('flag', 'uv',time() + (86400 * 30), "/");
echo $_COOKIE['flag'];

?>