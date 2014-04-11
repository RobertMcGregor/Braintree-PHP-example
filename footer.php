

		<!-- Bootstrap JS include -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

		<!-- Jquery ui -->
		<script src="js/jquery-ui-1.10.4.min.js"></script>

	    <!-- Braintree js --> 
	    <script src="https://js.braintreegateway.com/v1/braintree.js"></script>
	    <script>
	      var braintree = Braintree.create("MIIBCgKCAQEA4r8HobL/ayOzyAiSOTelqXZ1+0MfH0JTj3mjeYnPm3eqv88jVcv1Bvs2A/Rr1/wlKPCWyL33ZvoMgqMM3ETYWZdb0t+UnUi+/c8cHyjp1YT7//L0gDgGtzwLkypQ+r7vhXG2B09YYxW0gTn6nvtse0POwNyz5+IGu7u3Xfr2rVePNHm22zmxwlf2/kzEaWdz6OTNFjN+5RRo1A1oefE0AgQeMLUigLZyN69k8Ex/thbOrO3HzWuA4xC2o0lnrayE/YQavzX8m9v1ddr3Lp6airzERK2LD9Atr5Ech0fXDENT5Q8KXgT3XDgntSSVmyVGZGUkwhCi+Tb2D0r2SCx3XwIDAQAB");
	      braintree.onSubmitEncryptForm("braintree-payment-form");
	    </script>
	
		 <script>

		 	$(".toggle_target").toggle();

		 	$(".toggle_btn").click(function(){
		 		$(".toggle_target").toggle();
		 	});
			
		</script>

		<!-- Gigya logout --> 
		<script>
			function onLogout(response) {   
				if ( response.errorCode == 0 ) {                
					alert('You are now logged out'); 
				} 
				else { 
					alert('Error :' + response.errorMessage); 
				} 
			}
		</script>

	</body>
</html>