<?php
    // require braintree
    require_once 'lib/braintree-php-2.27.0/lib/Braintree.php';
    // configure braintree
    Braintree_Configuration::environment('sandbox');
    Braintree_Configuration::merchantId('444s7mg9tmz62x24');
    Braintree_Configuration::publicKey('sn37xjfq972bbpvz');
    Braintree_Configuration::privateKey('c9230a35c0f109d5095fb9448c2dfcd3');
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>- TVOD -</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
	
	</head>
	
	<body>

    <?php
    // display banner menu
    require_once 'menu.php';
    ?>
		
    <div class="container">

			<br />
			<br />

        <div class="starter-template">
          <h1>Braintree, Gigya and TVOD</h1>
          <p class="lead">This is a quick test to get braintree, gigya talking for the TVOD project.</p>
        </div>

      <h1>Braintree Customer Form</h1>
      <form action="customer.php" method="POST" id="braintree-payment-form">
        <h2>Customer Information</h2>
        <p>
          <label>First Name</label>
          <input type="text" name="first_name" id="first_name"></input>
        </p>
        <p>
          <label for="last_name">Last Name</label>
          <input type="text" name="last_name" id="last_name"></input>
        </p>
        <p>
          <label for="postal_code">Postal Code</label>
          <input type="text" name="postal_code" id="postal_code"></input>
        </p>
        <h2>Credit Card</h2>
        <p>
          <label>Card Number</label>
          <input type="text" size="20" autocomplete="off" data-encrypted-name="number" />
        </p>
        <p>
          <label>CVV</label>
          <input type="text" size="4" autocomplete="off" data-encrypted-name="cvv" />
        </p>
        <p>
          <label>Expiration (MM/YYYY)</label>
          <input type="text" size="2" data-encrypted-name="month" /> / <input type="text" size="4" data-encrypted-name="year" />
        </p>
        <input class="submit-button" type="submit" />
      </form>

			<br />
			<br />
        
      <div>
        <ul>
          <li>4111 1111 1111 1111</li>
          <li>321</li>
          <li>02</li>
          <li>17</li>
        </ul>
      </div>

    </div><!-- /.container -->

		<!-- Bootstrap JS include -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

    <!-- Braintree js --> 
    <script src="https://js.braintreegateway.com/v1/braintree.js"></script>
    <script>
      var braintree = Braintree.create("MIIBCgKCAQEA4r8HobL/ayOzyAiSOTelqXZ1+0MfH0JTj3mjeYnPm3eqv88jVcv1Bvs2A/Rr1/wlKPCWyL33ZvoMgqMM3ETYWZdb0t+UnUi+/c8cHyjp1YT7//L0gDgGtzwLkypQ+r7vhXG2B09YYxW0gTn6nvtse0POwNyz5+IGu7u3Xfr2rVePNHm22zmxwlf2/kzEaWdz6OTNFjN+5RRo1A1oefE0AgQeMLUigLZyN69k8Ex/thbOrO3HzWuA4xC2o0lnrayE/YQavzX8m9v1ddr3Lp6airzERK2LD9Atr5Ech0fXDENT5Q8KXgT3XDgntSSVmyVGZGUkwhCi+Tb2D0r2SCx3XwIDAQAB");
      braintree.onSubmitEncryptForm("braintree-payment-form");
    </script>


	</body>

</html>


