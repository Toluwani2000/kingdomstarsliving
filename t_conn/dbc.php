<?php 
	if(strtolower($server) == "https://kingdomstarsliving.com"){
		function runSQL($sql){
			$username = "kinghepl_kingdomstarsliving";
			$password = "@kingdomstars";
			$database = "kinghepl_kingdomstarsliving";
			$server = "localhost";
			$con = mysqli_connect($server, $username, $password, $database);
			$result = mysqli_query($con,$sql);
			mysqli_close($con);
			return $result;
		}
	}else{
		function runSQL($sql){
			$username = "root";
			$password = "";
			$database = "kingdomstarsliving";
			$server = "localhost";
			$con = mysqli_connect($server, $username, $password, $database);
			$result = mysqli_query($con,$sql);
			mysqli_close($con);
			return $result;
		}
	}
	

?>