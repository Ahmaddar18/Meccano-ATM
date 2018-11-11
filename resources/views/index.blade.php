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
			<section>
            	<div id="wizard">
				@include('back-button')
				@include('cancel-button')
				<br/><br/>
					<h1 style="text-align:center" tabIndex="0">Select Language</h1>
					<div align="center" vertical-align="center">
						<div style="padding:120px 0">
							<a href="/insert-card/"><button class="button button4" aria-label="English" tabIndex="1">English</button></a>
							<a href="/insert-cardN/"><button class="button button5" href="/insert-cardN/" aria-label="Norwegian" tabIndex="2">Norwegian</button></a>
						</div>
					</div>
				</div>

			</section>
		</div>
		<footer>
			<small>	Colorlib.com All rights reserved.Theme by Colorlib Powered by WordPress</small>
		</footer>
	
</body>
</html>