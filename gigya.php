
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