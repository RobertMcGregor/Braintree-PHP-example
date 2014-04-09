<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?php

	require_once 'lib/braintree-php-2.27.0/lib/Braintree.php';

	Braintree_Configuration::environment('sandbox');
	Braintree_Configuration::merchantId('444s7mg9tmz62x24');
	Braintree_Configuration::publicKey('sn37xjfq972bbpvz');
	Braintree_Configuration::privateKey('c9230a35c0f109d5095fb9448c2dfcd3');

?>

<html>

	<head>


		<meta http-equiv="content-type" content="text/html; charset=utf-8">

		<title>Welcome to TVOD</title>

		<!-- socialize.js script should only be included once -->
		<script type="text/javascript" src="http://cdn.gigya.com/js/socialize.js?apiKey=3_6Xi2j7Oip7qk2BhjndSy6sxfG1mL-M5VABBF-vc3NZJ0CdssXTapV-z-Zlqh1rbM">
		{
			siteName: 'dev.robertmcgregor.ca'
			,enabledProviders: 'facebook,twitter,linkedin,paypal'
		}
		</script>

	</head>

	<body>



		<br />

		<script type="text/javascript">
		var login_params=
		{
			showTermsLink: 'false'
			,height: 230
			,width: 310
			,UIConfig: '<config><body><controls><snbuttons buttonsize="50" /></controls></body></config>'
			,autoDetectUserProviders: ''
			,facepilePosition: 'none'
		}
		</script>
		<div id="componentDiv">Login to purchase</div>
		<script type="text/javascript">
		   gigya.socialize.showLoginUI(login_params);
		</script>


	</body>

</html>

<?php
	
	function process($amount='1000.00', $number='5105105105105100', $expirationMonth='05', $expirationYear='12' ){
		$result = Braintree_Transaction::sale(array(
		    'amount' => $amount,
		    'creditCard' => array(
		        'number' => $number,
		        'expirationMonth' => $expirationMonth,
		        'expirationYear' => $expirationYear
		    )
		));

		if ($result->success) {
		    return "success!: " . $result->transaction->id;
		} else if ($result->transaction) {
			return "Error processing transaction: \n  message: " . $result->message . "\n  code: " . $result->transaction->processorResponseCode . "\n  text: " . $result->transaction->processorResponseText;
		} else {
		    return "Message: " . $result->message . "\nValidation errors: \n" . $result->errors->deepAll();
		}
	}
?>


