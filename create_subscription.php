<?php

    /*********************************************************
    *
    * subscription.php
    * where customer imnormation is processed
    *
    /*********************************************************/

    require_once 'config.php';

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
        try {
            $customer_id = $result->customer->id;
            $customer = Braintree_Customer::find($customer_id);
            $payment_method_token = $customer->creditCards[0]->token;

            $result = Braintree_Subscription::create(array(
                'paymentMethodToken' => $payment_method_token,
                'planId' => $_POST['subscription']
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

    } else {
        echo("Validation errors:<br/>");
        foreach (($result->errors->deepAll()) as $error) {
            echo("- " . $error->message . "<br/>");
        }
    }

?>