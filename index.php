<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

	<head>


		<meta http-equiv="content-type" content="text/html; charset=utf-8">

		<title>Welcome to TVOD</title>

	</head>

	<body>

		<h1>TVOD</h1>
		<div>
			<form action="transaction.php" method="POST" id="braintree-payment-form">
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
					<input type="text" size="2" name="month" /> / <input type="text" size="4" name="year" />
				</p>
				<input type="submit" id="submit" />
			</form>
		</div>
	
		<script src="https://js.braintreegateway.com/v1/braintree.js"></script>
		<script>
		var braintree = Braintree.create("YourClientSideEncryptionKey");
		braintree.onSubmitEncryptForm('braintree-payment-form');
		</script>

	</body>

</html>


