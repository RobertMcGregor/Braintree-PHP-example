
		<!-- Toggles stuff --> 
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

		<script>
		 	// Load Braintree purchase form
		 	$(".load_form_btn").click(function(){
		 		$(".load_form_target").load("braintree.php"); // <-- see braintree.php
		 		$(".load_form_btn").hide();
		 	});

		</script>		

	</body>
</html>