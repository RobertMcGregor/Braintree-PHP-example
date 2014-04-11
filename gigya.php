
<a href="#" onclick="gigya.accounts.showScreenSet({screenSet:'Login-web', mobileScreenSet:'Mobile-login'});">Login</a>&nbsp;&nbsp;|&nbsp;&nbsp; 

<a href="#" onclick="gigya.accounts.logout({callback:onLogout});">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;

<script type="text/javascript">

	function getAccountInfoResponse(response)
	{
	    if ( response.errorCode == 0 ) {            
	        var profile = response['profile'];
	        var msg = 'First Name: ' + profile['firstName'] +  ' <br /> Last Name: ' + profile['lastName'] + ' <br /> age: ' + profile['age'] + ' <br /> loginProvider: ' + profile['loginProvider'] ;
	        $('.gigya_message').html(msg);
	    }
	    else {
	         $('.gigya_message').html('Error :' + response.errorMessage);
	    }    
	}

</script>
<br />
<br />
<div class="see_gigya_account" onclick="gigya.accounts.getAccountInfo({ callback: getAccountInfoResponse });">Click Here to see current gigya login info</div>
<div class="gigya_message"></div>