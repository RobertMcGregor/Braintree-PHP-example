<?php
require_once 'config.php';
require_once 'header.php';
require_once 'menu.php';
?>
		
<div class="container">

<h1>Testing CASL Status</h1>
<!--
<iframe src="" width="100%" height="600" onload="javascript: if(typeof ewt != 'undefined' && ewt && ewt.setIFrameSrc) ewt.setIFrameSrc(this, 'http://www.pages01.net/bellmedia-bnn/BNN/SubscriptionStatus'); else if(this.src != 'http://www.pages01.net/bellmedia-bnn/BNN/SubscriptionStatus') this.src = 'http://www.pages01.net/bellmedia-bnn/BNN/SubscriptionStatus';" >
  <p>Your browser does not support iframes.</p>
</iframe>
-->

<form method="post" action="http://www.pages01.net/bellmedia-bnn/BNN/SubscriptionStatus" pageId="5679979" siteId="24989" parentPageId="5679978" >
<table cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td style="padding: 5px 0px 0px 5px;">
			<div style="position: relative; overflow: hidden; width:300px;" id="container_EMAIL">
				<div style="width: 294px; overflow: hidden; ">	
					<div class="fieldLabel" style="width: 294px; margin: 5px 3px; ">Email<span class="required">*</span>
					</div>
				</div>
				
				<input type="text" name="Email" id="control_EMAIL" label="Email" class="textInput defaultText" style="margin: 0 3px 5px 3px; height: 20px; width: 294px;">
			</div>
		</td>
	</tr>
	<tr>
		<td id="errorMessageContainerId" class="formErrorMessages" style="display: none;">
			
		</td>
	</tr>
	<tr>
		<td style="padding: 5px 0px 0px 5px;">
			<div style="position: relative; overflow: hidden; width:300px;">
				<table cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td style="padding-right: 10px;">
							<input type="submit" class="defaultText buttonStyle" value="Submit">
						</td>
					</tr>
				</table>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<input type="hidden" name="CaslStatus" id="control_COLUMN21" value="Green">
		</td>
	</tr>
	
	<input type="hidden" name="formSourceName" value="StandardForm">

	<!-- DO NOT REMOVE HIDDEN FIELD sp_exp --><input type="hidden" name="sp_exp" value="yes">
	</table>
</form>



	
</div><!-- /.container -->


<?php
require_once 'footer.php';
?>

