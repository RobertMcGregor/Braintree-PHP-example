<?php
require_once 'config.php';
require_once 'header.php';
require_once 'menu.php';
?>
		
<div class="container">

	<h1> Demo 2 - Gigya client side tests</h1>

	<h2> Step one - Login with Gigya </h2>

	<a href="#" onclick="gigya.accounts.showScreenSet({screenSet:'Login-web', mobileScreenSet:'Mobile-login'});">Login</a>&nbsp;&nbsp;|&nbsp;&nbsp; 

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
				<td> Option 1 </td>
				<td> <input id="option_1" type="text" name="option_1"><br> </td>
			</tr>
	
			<tr>
				<td> Option 2 </td>
				<td> <input id="option_2" type="text" name="option_2"><br> </td>
			</tr>

			<tr>
				<td> Option 3 </td>
				<td> <input id="option_3" type="text" name="option_3"><br> </td>
			</tr>

			<tr>
				<td> Option 4 </td>
				<td> <input id="option_4" type="text" name="option_4"><br> </td>
			</tr>
			<tr>			
				<td></td>
				<td><input type="submit" value="submit"></td>	
			</tr>
		</table>
			
	</form> 

	<div class="gigya_message_rest"></div>


	<script type="text/javascript">
		
		// Dev.robertmcgregor.ca
		// ?ApiKey=3_6Xi2j7Oip7qk2BhjndSy6sxfG1mL-M5VABBF-vc3NZJ0CdssXTapV-z-Zlqh1rbM 
		// &secret=DVUKa9GjLS7UoFkpPk733vIMZuF5jFXMUikkQ5qQyPY=

		// marilyn.ca
		// ?ApiKey=3_PzNwMEMUYcK9WFfYmOwlmN5AiAXN5dWJZeYr8lGvdGOEh_aJAa0uiteRkb5sIiL3
		// &secret=DVUKa9GjLS7UoFkpPk733vIMZuF5jFXMUikkQ5qQyPY=

		/*
		$("#restForm").on("submit", function (e) {
    		e.preventDefault();
			
			var frameStart = '<iframe width="100%" height="600" src="';
			var frameEnd = '"></iframe>';
			var APIkey = "?ApiKey=3_6Xi2j7Oip7qk2BhjndSy6sxfG1mL-M5VABBF-vc3NZJ0CdssXTapV-z-Zlqh1rbM";
    		var Secretkey = "&secret=DVUKa9GjLS7UoFkpPk733vIMZuF5jFXMUikkQ5qQyPY=";
    		var command = $("#restFormCommand").val();
    		var option_1 = $("#option_1").val(); 
    		var option_2 = $("#option_2").val();
    		var option_3 = $("#option_3").val();
    		var option_4 = $("#option_4").val(); 
    		processGigyaRest(frameStart + command + APIkey + Secretkey + option_1 + option_2 + option_3 + option_4 + frameEnd );

    	});
    	*/
		// https://accounts.gigya.com/accounts.getSchema?ApiKey=3_PzNwMEMUYcK9WFfYmOwlmN5AiAXN5dWJZeYr8lGvdGOEh_aJAa0uiteRkb5sIiL3&secret=DVUKa9GjLS7UoFkpPk733vIMZuF5jFXMUikkQ5qQyPY=
	

		function processGigyaRest(rest_url)
		{	
			alert(rest_url);
		   $(".gigya_message_rest").html(rest_url); 
		}

	</script>

</div><!-- /.container -->


<?php
require_once 'footer.php';
?>

