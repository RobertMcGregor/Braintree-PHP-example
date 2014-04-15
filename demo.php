<?php
require_once 'config.php';
require_once 'header.php';
require_once 'menu.php';
?>
		
<div class="container">

	<h2> Step one - Login with Gigya </h2>

	<a href="#" onclick="gigya.accounts.showScreenSet({screenSet:'Login-web', mobileScreenSet:'Mobile-login'});">Login</a>&nbsp;&nbsp;|&nbsp;&nbsp; 

	<a href="#" onclick="gigya.accounts.logout({callback:onLogout});">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;

	<script type="text/javascript">

		function getAccountInfoResponse(response)
		{
		    if ( response.errorCode == 0 ) {            
		        var profile = response['profile'];
		        var msg = 'First Name: ' + profile['firstName'] +  ' <br /> Last Name: ' + profile['lastName'] + ' <br /> postal code: ' + profile['zip']; 
		        $('.gigya_message').html(msg);
		    }
		    else {
		         $('.gigya_message').html(response.errorMessage);
		    }    
		}

	</script>

	<h2> Step Two - View Gigya login data </h2>
	<div class="see_gigya_account" onclick="gigya.accounts.getAccountInfo({ callback: getAccountInfoResponse });">Click Here</div>
	<div class="gigya_message"></div>

	<!-- Form mark up is located in braintree.php --> 
	<h2> Step Three - Subscribe to service </h2>
	<div class="load_form_btn">Load Purchase Form</div>
	<div class="load_form_target"></div>

</div><!-- /.container -->


<?php
require_once 'footer.php';
?>

