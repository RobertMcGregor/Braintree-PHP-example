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


    	</div><!-- /.container -->

		<!-- Bootstrap JS include -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>

</html>


