<!DOCTYPE html>
<html lang="no">
	<head>
		<meta charset="utf-8">
		<title>Meccano ATM</title>
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	</head>
	<body>
		<div class="wrapper">
            	<div id="wizard">
				@include('back-buttonN')
					<div style="margin-left: auto;margin-right: auto">
						<h1 style="text-align:center">Sett Inn Kortet</h1>
						<div align="center" vertical-align="center">
								<div style="padding:120px 0">
								<a href="/homeN/"><button class="button button2" aria-label="Forsette">Fortsette</button></a>
								</div>
						</div>
					</div>
					@include('cancel-buttonN')
				</div>
		</div>
		<footer>
			<small>	Colorlib.com All rights reserved.Theme by Colorlib Powered by WordPress</small>
		</footer>

</body>
</html>