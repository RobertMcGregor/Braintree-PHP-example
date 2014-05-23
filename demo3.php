<?php
require_once 'config.php';
require_once 'header.php';
require_once 'menu.php';
?>
		
<div class="container">

	<h1> Demo 2 - Gigya Server Side API tests</h1>

	<h2> Step one - Login with Gigya </h2>

	<a href="#" onclick="gigya.accounts.showScreenSet({screenSet:'Testing_code_copy_paste', mobileScreenSet:'Testing_code_copy_paste'});">Login</a>&nbsp;&nbsp;|&nbsp;&nbsp; 

	<a href="#" onclick="gigya.accounts.logout({callback:onLogout});">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;

	<script type="text/javascript">

		function getAccountInfoResponseUID(response)
		{
		    if ( response.errorCode == 0 ) {            
		        var profile = response['profile'];
		        var UID = response['UID'];
		        var msg = 'First Name: ' + profile['firstName'] +  ' <br /> Last Name: ' + profile['lastName'] + ' <br /> postal code: ' + profile['zip']  + ' <br /> UID: ' + UID; 
		        $('.gigya_message_js').html(msg);
		    }
		    else {
		         $('.gigya_message').html(response.errorMessage);
		    }    
		}

	</script>

	<h2> Step Two - View Gigya login data (js method)</h2>
	<div class="see_gigya_account" onclick="gigya.accounts.getAccountInfo({ callback: getAccountInfoResponseUID });">Click Here</div>
	<div class="gigya_message_js"></div>

	<h2>Step Three - make api request</h2>
	
	<!-- TEST WITH https://accounts.gigya.com/accounts.setSchema  -->
	<form id="restForm" method="post" action="./processGigya.php" >
		<table>
			<tr>
				<td> Command </td>
				<td> <input id="restFormCommand" type="text" name="command"><br> </td>
			</tr>
			<tr>
				<td> Option 1</td>
				<td> <textarea cols="100" rows="10" id="option_1" name="option_1"></textarea><br></td>
			</tr>
			<tr>
				<td> Option 2</td>
				<td> <textarea cols="100" rows="10" id="option_2" name="option_2"></textarea><br></td>
			</tr>
	
			<tr>			
				<td></td>
				<td><input type="submit" value="submit"></td>	
			</tr>
		</table>
			
	</form> 

	<div class="gigya_message_rest"></div>

</div><!-- /.container -->


<?php
require_once 'footer.php';
?>

