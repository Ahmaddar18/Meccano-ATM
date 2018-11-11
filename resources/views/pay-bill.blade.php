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
				<br/>
				<br/>
					<h1 style="text-align:center">Do you want to pay the Bill</h1>
					<div align="center" vertical-align="center">
						<div style="padding:120px 0">
						    <a href="/bill-paid/"><button class="button button4" aria-label="Yes">Yes</button>
						    <a href="/home/">     <button class="button button5" aria-label="No">No&nbsp</button></a>
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