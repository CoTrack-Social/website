<?php
if (isset($_POST['email'])) {


	$email=$_POST['email'] ;

	$email =filter_var($email, FILTER_SANITIZE_EMAIL);

	$email=urlencode($email);

	$url="http://kualet.com/email_cotrack.php?e=".$email ;

	$json = file_get_contents($url);
	$obj = json_decode($json);

	header("Location: aviso_suscripcion.html");

} else {
	header("Location: index.html");
}


