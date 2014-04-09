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

		<?php

			$result = Braintree_Transaction::sale(array(
			    'amount' => '1010.00',
			    'creditCard' => array(
			        'number' => '5105105105105100',
			        'expirationMonth' => '05',
			        'expirationYear' => '12'
			    )
			));

			if ($result->success) {
			    print_r("success!: " . $result->transaction->id);
			} else if ($result->transaction) {
			    print_r("Error processing transaction:");
			    print_r("\n  message: " . $result->message);
			    print_r("\n  code: " . $result->transaction->processorResponseCode);
			    print_r("\n  text: " . $result->transaction->processorResponseText);
			} else {
			    print_r("Message: " . $result->message);
			    print_r("\nValidation errors: \n");
			    print_r($result->errors->deepAll());
			}

		?>

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
		<div id="componentDiv"></div>
		<script type="text/javascript">
		   gigya.socialize.showLoginUI(login_params);
		</script>


	</body>

</html>



