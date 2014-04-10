<?php

    /*********************************************************
    *
    * subscription.php
    * where customer imnormation is processed
    *
    /*********************************************************/

    echo "<pre>";
    print_r($_POST);
    echo "</pre> <br /><br />";
    // require braintree
    require_once 'lib/braintree-php-2.27.0/lib/Braintree.php';
    // configure braintree
    Braintree_Configuration::environment('sandbox');
    Braintree_Configuration::merchantId('444s7mg9tmz62x24');
    Braintree_Configuration::publicKey('sn37xjfq972bbpvz');
    Braintree_Configuration::privateKey('c9230a35c0f109d5095fb9448c2dfcd3');

    try {
        $customer_id = $_GET["customer_id"];
        $customer = Braintree_Customer::find($customer_id);
        $payment_method_token = $customer->creditCards[0]->token;

        $result = Braintree_Subscription::create(array(
            'paymentMethodToken' => $payment_method_token,
            'planId' => 'test_plan_1'
        ));

        if ($result->success) {
            echo("Success! Subscription " . $result->subscription->id . " is " . $result->subscription->status);
        } else {
            echo("Validation errors:<br/>");
            foreach (($result->errors->deepAll()) as $error) {
                echo("- " . $error->message . "<br/>");
            }
        }
    } catch (Braintree_Exception_NotFound $e) {
        echo("Failure: no customer found with ID " . $_GET["customer_id"]);
    }

?>