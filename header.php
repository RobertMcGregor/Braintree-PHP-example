<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="favicon.ico">

        <title>Testing....</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="starter-template.css" rel="stylesheet">

        <!-- gigya login css --> 
        <link href="css/gigya.css" rel="stylesheet">
     
        <style type="text/css">
            h2 {
                font-size: 16px;
                font-weight: bold;
                color: rgb(116, 116, 116);
            }
            *{
                font-family: Arial;
            }
            p, label{
                line-height:0.6em;
                font-size: 12px;
            }
            .gigya-error-display {
                background-color: rgb(254, 233, 234);
                border: 1px solid rgb(228, 157, 159);
            }
            
        </style>

        <!-- Bootstrap JS include -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>       
        <script src="js/jquery-form.js"></script>

        <!-- Jquery ui -->
        <script src="js/jquery-ui-1.10.4.min.js"></script>

        <!-- Braintree js --> 
        <script src="https://js.braintreegateway.com/v1/braintree.js"></script>
        <script>
          var braintree = Braintree.create("MIIBCgKCAQEA4r8HobL/ayOzyAiSOTelqXZ1+0MfH0JTj3mjeYnPm3eqv88jVcv1Bvs2A/Rr1/wlKPCWyL33ZvoMgqMM3ETYWZdb0t+UnUi+/c8cHyjp1YT7//L0gDgGtzwLkypQ+r7vhXG2B09YYxW0gTn6nvtse0POwNyz5+IGu7u3Xfr2rVePNHm22zmxwlf2/kzEaWdz6OTNFjN+5RRo1A1oefE0AgQeMLUigLZyN69k8Ex/thbOrO3HzWuA4xC2o0lnrayE/YQavzX8m9v1ddr3Lp6airzERK2LD9Atr5Ech0fXDENT5Q8KXgT3XDgntSSVmyVGZGUkwhCi+Tb2D0r2SCx3XwIDAQAB");
          braintree.onSubmitEncryptForm("braintree-payment-form");
        </script>

        <!-- Gigya JS --> 
        <script type="text/javascript" lang="javascript" 
           src="http://cdn.gigya.com/JS/socialize.js?apikey=3_6Xi2j7Oip7qk2BhjndSy6sxfG1mL-M5VABBF-vc3NZJ0CdssXTapV-z-Zlqh1rbM "></script>


    </head>
	
	<body>
        <br />
        <br />
        <br />
        <br />