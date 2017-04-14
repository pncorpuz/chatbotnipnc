<?php
	
	if(isset($_REQUEST['hub_challenge'])){
		$challenge = $_REQUEST['hub_challenge'];
		$token = $_REQUEST['hub_verify_token'];
	}
	
	if($token == "myCustomToken123"){
		echo $challenge;
		
	}
	
	?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	
	
</body>
</html>
