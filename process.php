<?php session_start(); error_reporting(0);?>
<?php
	require_once('t_conn/url.php');
	require_once('t_conn/dbc.php');
	require_once('t_incs/functions.php');

		$name = RMC($_POST["name"]);
		$email = RMC($_POST["email"]);
		$subject = RMC($_POST["subject"]);
		$message = RMC($_POST["message"]);
		if( !empty($name) &&!empty($email) &&!empty($subject) && !empty($message)){
			
		}else{
			die("<div class='alert alert-danger'>A required field is empty.</div>");
		}
			
		//send admin congrats mail
		$m_from ="$company_email";
		$m_to ="$company_email";
		$m_subject ="New contact message";
		$m_message ="Dear $company, you have recieved a new contact mail. Find details below.<br/><br/>
			Name: <b>$name</b> <br/>
			Email: <b>$email</b> <br/>
			Subject: <b>$subject</b> <br/>
			Message: <b>$message</b>
			";
		require("t_incs/mail.php");
		
		//send user congrats mail
		$m_from ="$company_email";
		$m_to ="$email";
		$m_subject ="Your email was recieved, thank you";
		$m_message ="Dear $name; thank you for contacting us, we would get back to you soon. 
		Thank you for choosing $company.
		";
		require("t_incs/mail.php");

		echo "<div class='alert alert-success'>We have successfully received your message </br> Thank You </div>";
?>
<script>
	$('#form').trigger('reset');
</script>