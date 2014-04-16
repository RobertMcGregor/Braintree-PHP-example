<?php

    /*********************************************************
    *
    * subscription.php
    * where customer imnormation is processed
    *
    /*********************************************************/

    require_once 'config.php';

    $customer_result = Braintree_Customer::create(array(
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

    if ($customer_result->success) {
        try {
            $customer_id = $customer_result->customer->id;
            $customer = Braintree_Customer::find($customer_id);
            $payment_method_token = $customer->creditCards[0]->token;

            $subscription_result = Braintree_Subscription::create(array(
                'paymentMethodToken' => $payment_method_token,
                'planId' => $_POST['subscription']
            ));

            if ($subscription_result->success) {
                echo("Success! Subscription " . $subscription_result->subscription->id . " is " . $subscription_result->subscription->status);

                echo("<br /> Customer Details: ");
                echo("<pre>");
                print_r($customer_result);
                echo("</pre>");

                echo(' <br /><br />------------------------------[SUBSCRIPTION]------------------------------<br /><br />');

                echo("<br /> Subscription Details: ");
                echo("<pre>");
                print_r($subscription_result);
                echo("</pre>");

                echo(' <br /><br />------------------------------[FOUND CUSTOMER]------------------------------<br /><br />');
    

                $customer = Braintree_Customer::find($customer_result->customer->id);

                echo("<pre>");
                print_r($customer);
                echo("</pre>");


                // TODO: add customer id to gigya

                //$customer_result->customer->id;
                
                /*
                    TO DO: braintree_customer_id

                    insert customer id to gigya. 
                    gigya
                    http://developers.gigya.com/020_Client_API/020_Accounts/accounts.setAccountInfo
                    braintree
                    https://www.braintreepayments.com/docs/php/customers/search
                */
                



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