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
					<h1 style="text-align:center">Select you choice</h1>
					<div align="center" vertical-align="center">
						<div style="padding:120px 0">
							<a href="/enter-pin/"><button class="button button4" aria-label="withdraw cash">Withdraw Cash</button></a>
							<a href="/pay-bill-service/"><button class="button button5" aria-label="Pay a bill">&nbsp&nbsp&nbspPay a Bill&nbsp&nbsp&nbsp</button></a>
						</div>
                    </div>
				</div>
			</section>
		</div>
		<footer>
			<small>	Made by: Ahmad Ijaz and Muhammad Danial Arshad </small>
		</footer>
    </body>
</html>