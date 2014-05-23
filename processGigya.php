<?php
require_once 'config.php';
//phpinfo();
echo("<pre>");
print_r($_POST);
echo("</pre> <br /> <hr> <br /><br />");

//accounts.setSchema

// Dev.robertmcgregor.ca
// ?ApiKey=3_6Xi2j7Oip7qk2BhjndSy6sxfG1mL-M5VABBF-vc3NZJ0CdssXTapV-z-Zlqh1rbM 
// &secret=DVUKa9GjLS7UoFkpPk733vIMZuF5jFXMUikkQ5qQyPY=

// marilyn.ca
// ?ApiKey=3_PzNwMEMUYcK9WFfYmOwlmN5AiAXN5dWJZeYr8lGvdGOEh_aJAa0uiteRkb5sIiL3
// &secret=DVUKa9GjLS7UoFkpPk733vIMZuF5jFXMUikkQ5qQyPY=

// PRODUCTION
// 3_gpu8tEExJ3NwkC3JBauhmwpSnxjpwIZS6dVYvEE8z5OsuB2_Tv0887PQhh4cZobY
// DVUKa9GjLS7UoFkpPk733vIMZuF5jFXMUikkQ5qQyPY=

// View single account
// https://accounts.gigya.com/accounts.getAccountInfo?UID=robert.mcgregor@bellmedia.ca&ApiKey=3_PzNwMEMUYcK9WFfYmOwlmN5AiAXN5dWJZeYr8lGvdGOEh_aJAa0uiteRkb5sIiL3&secret=DVUKa9GjLS7UoFkpPk733vIMZuF5jFXMUikkQ5qQyPY=

try {
	
	// marilyn.ca
	$apiKey = "3_gpu8tEExJ3NwkC3JBauhmwpSnxjpwIZS6dVYvEE8z5OsuB2_Tv0887PQhh4cZobY";
	$secretKey = "DVUKa9GjLS7UoFkpPk733vIMZuF5jFXMUikkQ5qQyPY=";
		

	// Dev.robertmcgregor.ca
	/*
	$apiKey = "3_6Xi2j7Oip7qk2BhjndSy6sxfG1mL-M5VABBF-vc3NZJ0CdssXTapV-z-Zlqh1rbM";
	$secretKey = "DVUKa9GjLS7UoFkpPk733vIMZuF5jFXMUikkQ5qQyPY=";
	*/	



	$command = $_POST['command'];	
	
	$params = new GSObject($_POST['option_1']);	
	$UID = new GSObject($_POST['option_2']);


	/*
	$option_3 = GSObject($_POST['option_3']);
	$option_4 = GSObject($_POST['option_4']);	
	*/
	//$useHTTPS = true;

	$request = new GSRequest($apiKey, $secretKey, $command, $params, $useHTTPS);

	$response = $request->send();

	if($response->getErrorCode()==0){ 
		echo ("<h1>Success in operation.</h1>");
		
		echo("<pre>");
		print_r($response);
		echo("</pre> <br /> <hr> <br /><br />");
	
	}else{ 
		echo ("Got error : ");
		echo("<pre>");
		print_r($response);
		echo("</pre> <br /> <hr> <br /><br />");
	}

} catch ( GSException $e ) {
	echo("<pre>");
	print_r($e);
	echo("</pre> <br /> <hr> <br /><br />");

}



?>