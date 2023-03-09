<?php

// 	$query = "SELECT * FROM t_company";
// 	$result = runSQL($query);
// 	$data = mysqli_fetch_array($result);
// 	$company_id = $data['t_id'];
// 	$company = $data["t_name"];
	// $company_motto = $data["t_motto"];
// 	$company_phone = $data["t_phone"];
	$company_email = "support@kingdomstarliving.com";
	// $company_email = $data["t_email"];
	// $company_desc = $data["t_desc"];
// 	$company_address = $data["t_address"];
	$company_twitter = "https://twitter.com/kingdomstarsliv"; 
	$company_facebook = "https://www.facebook.com/Kingdomstarsliving"; 

	$company ="Kingdom Star Living Inc";
	// // $company_motto = $data["t_motto"];
	$company_phone = "+240 413 5059";
	// $company_email ="kingdomstarsliving.inc@outlook.com";
	// // $company_desc = $data["t_desc"];
	$company_address = "6525 Landover Rd MD, Cheverly, 20785 United States";
	
	function RMC($data) {
	$data = strip_tags($data);
	$data = stripslashes($data);   //remove this later
    //$data = urlencode($data);   //add this
    //$data = mysql_escape_string($data);
    $data = htmlspecialchars($data);
    $data = trim($data);
	return $data;
	}	
	function DRMC($data) { //display
		$data = urldecode($data);
		$data = htmlspecialchars($data);   //remove this later
		$data = trim($data);
		$data = nl2br($data);
	    return $data;
	}	
?>