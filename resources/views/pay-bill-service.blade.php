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
					<h1 style="text-align:center">Please Select the Service</h1>
					<div align="center" vertical-align="center">
						<div style="padding:120px 0">
						    <a href="/is-registered/"><button class="button button4" aria-label="Phone">&nbspPhone&nbsp</button> </a>
						    <a href="/is-registered/"><button class="button button5" aria-label="Gas">&nbsp&nbsp&nbspGas&nbsp&nbsp&nbsp</button></a>
						    <a href="/is-registered/"><button class="button button4" aria-label="Electricity">Electricity</button></a>
						    <a href="/is-registered/"><button class="button button5" aria-label="Water">&nbsp&nbsp&nbspWater&nbsp&nbsp&nbsp</button></a>
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