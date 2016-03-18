<?php
	$cl = curl_init(); 
	$UNPWD = "Put your username:passcode combo here." 
	curl_setopt($cl, CURLOPT_URL, "https://frc-api.firstinspires.org/v2.0/".$_GET["Year"]);
	curl_setopt($cl, CURLOPT_USERPWD, $UNPWD); 
	curl_setopt($cl, CURLOPT_HTTPGET, 1); 
	curl_setopt($cl, CURLOPT_RETURNTRANSFER, 1);  
	curl_setopt($cl, CURLOPT_SSL_VERIFYPEER, 0);	

	$output = curl_exec($cl); 
	if (curl_error($cl) == "") { 
		echo $output; 
	} 
	else { 
		header("HTTP/1.1 404 Not Found", true, 404);  
	} 
	curl_close($cl); 
?> 
