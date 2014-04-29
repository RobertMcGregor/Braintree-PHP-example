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

try {

	$apiKey = "3_6Xi2j7Oip7qk2BhjndSy6sxfG1mL-M5VABBF-vc3NZJ0CdssXTapV-z-Zlqh1rbM";
	$secretKey = "DVUKa9GjLS7UoFkpPk733vIMZuF5jFXMUikkQ5qQyPY=";
	$command = $_POST['command'];
	$option_1 = GSObject($_POST['option_1']);
	$option_2 = GSObject($_POST['option_2']);
	$option_3 = GSObject($_POST['option_3']);
	$option_4 = GSObject($_POST['option_4']);	
	$params = null;
	$useHTTPS = true;

	$request = new GSRequest($apiKey, $secretKey, $command, $params, $useHTTPS);

	$response = $request->send();

	if($response->getErrorCode()==0){ 
		echo (“Success in setStatus operation.”);
		//print_r($response);
	}
	else{ 
		echo (“Got error on setStatus: ” . $response->getErrorMessage());
	}

} catch ( GSException $e ) {
	var_dump($e);
}



?>