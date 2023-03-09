<?php 
$server = $_SERVER['SERVER_NAME'];
//$other_part = $_SERVER['REQUEST_URI'];
if(strtolower($server) == "localhost"){
$dir = "http://$server/codes/kingdomstarsliving/"; 	
}else{
$dir = "https://$server/"; 
}

?>