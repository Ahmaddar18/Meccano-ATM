<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Meccano ATM</title>
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	</head>
	<body>
		<div class="wrapper">
            	<div id="wizard">
				@include('back-button')
				@include('cancel-button')
				<br/><br/>
					<div style="margin-left: auto;margin-right: auto">
						<h1 style="text-align:center">Insert Card</h1>
						<div align="center" vertical-align="center">
								<div style="padding:120px 0">
									<a href="/home/"><button class="button button2" aria-label="Continue">Continue</button></a>
								</div>
						</div>
					</div>
				</div>
		</div>
		<footer>
			<small>	Colorlib.com All rights reserved.Theme by Colorlib Powered by WordPress</small>
		</footer>

</body>
</html>