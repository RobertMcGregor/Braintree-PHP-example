<?php
/*********************************************************
*
* Process.php
* where all form information comes to get processed 
* TODO add subscription type
*
/*********************************************************/

    // require braintree
    require_once 'lib/braintree-php-2.27.0/lib/Braintree.php';
    // configure braintree
    Braintree_Configuration::environment('sandbox');
    Braintree_Configuration::merchantId('444s7mg9tmz62x24');
    Braintree_Configuration::publicKey('sn37xjfq972bbpvz');
    Braintree_Configuration::privateKey('c9230a35c0f109d5095fb9448c2dfcd3');

    $result = Braintree_Customer::create(array(
        "firstName" => $_POST["first_name"],
        "lastName" => $_POST["last_name"],
        "creditCard" => array(
            "number" => $_POST["number"],
            "expirationMonth" => $_POST["month"],
            "expirationYear" => $_POST["year"],
            "cvv" => $_POST["cvv"],
            "billingAddress" => array(
                "postalCode" => $_POST["postal_code"]
            )
        )
    ));

    if ($result->success) {
        echo("Success! Customer ID: " . $result->customer->id);
    } else {
        echo("Validation errors:<br/>");
        foreach (($result->errors->deepAll()) as $error) {
            echo("- " . $error->message . "<br/>");
        }
    }

?>