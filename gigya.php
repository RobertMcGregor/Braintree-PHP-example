<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>- TVOD -</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
	
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
						<li class="active"><a href="./home.php">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>

		<div class="container">

			<br />
			<br />

			<h1 onclick="call_login();">Click Here!</h1>

		</div>
	</body>

	<!-- socialize.js script should only be included once -->
	<script type="text/javascript" src="http://cdn.gigya.com/js/socialize.js?apiKey=3_6Xi2j7Oip7qk2BhjndSy6sxfG1mL-M5VABBF-vc3NZJ0CdssXTapV-z-Zlqh1rbM">
	{
		siteName: 'dev.robertmcgregor.ca (sandbox)'
		,enabledProviders: 'facebook,twitter,googleplus,linkedin,yahoo,paypal'
	}
	</script>



	<script type="text/javascript">
		var login_params=
		{
			showTermsLink: 'false'
			,height: 230
			,width: 310
			,UIConfig: '<config><body><controls><snbuttons buttonsize="40" /></controls></body></config>'
			,buttonsStyle: 'fullLogo'
			,autoDetectUserProviders: ''
			,facepilePosition: 'none'
		}
	</script>

	<div id="componentDiv"></div>

	<script type="text/javascript">
		function call_login(){
	   		gigya.socialize.showLoginUI(login_params);
		}
	</script>

</html>