<?php 
/*********************************************************
*
* Process.php
* where all form information comes to get processed 
* TODO add subscription types
*
/*********************************************************/

	// require braintree
	require_once 'lib/braintree-php-2.27.0/lib/Braintree.php';
	// configure braintree
	Braintree_Configuration::environment('sandbox');
	Braintree_Configuration::merchantId('444s7mg9tmz62x24');
	Braintree_Configuration::publicKey('sn37xjfq972bbpvz');
	Braintree_Configuration::privateKey('c9230a35c0f109d5095fb9448c2dfcd3');

	if($_POST){
		echo process($_POST['amount'],$_POST['number'],$_POST['expirationMonth'], $POST['expirationYear']); 
	}
	
	public function process($amount='1000.00', $number='5105105105105100', $expirationMonth='05', $expirationYear='12' ){
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