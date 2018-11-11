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
					<h1 style="text-align:center">Withdraw Cash</h1>
					<div align="center" vertical-align="center">
						<div style="padding:30px 0">
							<button class="button button4" onclick="addAmmount(100)" aria-label="one hundred">100 &nbsp</button>
							<button class="button button5" onclick="addAmmount(200)" aria-label="two hundred">200 &nbsp </button>
							<button class="button button4" onclick="addAmmount(400)" aria-label="four hundred">400 &nbsp</button>
							<button class="button button5" onclick="addAmmount(500)" aria-label="five hundred">500 &nbsp</button>
						</div>
						<div style="padding:0px 0">
							<button class="button button4" onclick="addAmmount(1000)" aria-label="one thousand">1000</button>
							<button class="button button5" onclick="addAmmount(1500)" aria-label="fifteen hundred">1500</button>
							<button class="button button4" onclick="addAmmount(2000)" aria-label="two thousand">2000</button>
							<button class="button button5" onclick="addAmmount(4000)" aria-label="four thousand">4000</button>
						</div>
						<div style="padding:30px 0">
								<h2>Amount &nbsp&nbsp&nbsp</h2>
						</div>
						<div style="padding:0px 0">
								<input id="myAmount" type="text" style="font-size:25px;" value="0" placeholder="0.0" class="form-control" disabled>
						</div>
						<div style="padding:30px 0">
								<a href="/custom-amount/"><button class="button button2" aria-label="Custom Amount">Custom Amount&nbsp </button></a>
								<button class="button button3" onclick="Withdraw()" aria-label="Withdraw Amount">Withdraw Amount &nbsp </button>
							</div>
					</div>
				</div>
			</section>
		</div>
		<footer>
			<small>	Colorlib.com All rights reserved.Theme by Colorlib Powered by WordPress</small>
		</footer>

</body>
<script>
	function addAmmount(x)
	{
		document.getElementById("myAmount").value =  parseInt(document.getElementById("myAmount").value) + parseInt(x); 
	}
	function Withdraw()
	{
		alert(document.getElementById("myAmount").value+" Money has been withdrawn" )
	}
</script>
</html>