<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

 	<body>

    	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      		<div class="container">
        		<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">TVOD</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>

		<div class="container">

			<br />
			<br />


	    	<div class="starter-template">
	    		<h1>Braintree, Gigya and TVOD</h1>
	    		<p class="lead">This is a quick test to get braintree, gigya talking for the TVOD project.</p>
	    	</div>

			<div>
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
				<script src="https://js.braintreegateway.com/v1/braintree.js"></script>
				<script>
				var braintree = Braintree.create("YourClientSideEncryptionKey");
				braintree.onSubmitEncryptForm("braintree-payment-form");
				</script>	
			</div>


    	</div><!-- /.container -->

		<!-- Bootstrap JS include -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<!-- Braintree JS include --> 
		<script src="https://js.braintreegateway.com/v1/braintree.js"></script>
		<script>
		var braintree = Braintree.create("YourClientSideEncryptionKey");
		braintree.onSubmitEncryptForm('braintree-payment-form');
		</script>

	</body>
</html>




	


	</body>

</html>


