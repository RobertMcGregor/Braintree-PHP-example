<?php
/*********************************************************
*
* customer.php
* where customer imnormation is processed
*
/*********************************************************/
    echo "<pre>";
    print_r($_POST);
    echo "</pre> <br /><br />";


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
        echo("Success! Customer ID: " . $result->customer->id . "<br/>");
        echo("<a href='./subscription.php?customer_id=" . $result->customer->id . "'>Create subscription for this customer</a>");
    } else {
        echo "customer.php";
        echo("Validation errors:<br/>");
        foreach (($result->errors->deepAll()) as $error) {
            echo("- " . $error->message . "<br/>");
        }
    }

?>