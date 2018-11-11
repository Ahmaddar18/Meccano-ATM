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
			<section>
            	<div id="wizard">
				@include('back-buttonN')
					<h1 style="text-align:center">Ta ut penger</h1>
					<div align="center" vertical-align="center">
						<div style="padding:30px 0">
							<button class="button button4" onclick="addAmmount(100)" aria-label="en hundre">100 &nbsp</button>
							<button class="button button5" onclick="addAmmount(200)" aria-label="to hundre">200 &nbsp </button>
							<button class="button button4" onclick="addAmmount(400)" aria-label="fire hundre">400 &nbsp</button>
							<button class="button button5" onclick="addAmmount(500)" aria-label="fem hundre">500 &nbsp</button>
						</div>
						<div style="padding:0px 0">
							<button class="button button4" onclick="addAmmount(1000)" aria-label="en tusen">1000</button>
							<button class="button button5" onclick="addAmmount(1500)" aria-label="en tusen og fem hundre">1500</button>
							<button class="button button4" onclick="addAmmount(2000)" aria-label="to tusen">2000</button>
							<button class="button button5" onclick="addAmmount(4000)" aria-label="fire tusen">4000</button>
						</div>
						<div style="padding:30px 0">
								<h2 aria-label="Beløp">Beløp &nbsp&nbsp&nbsp</h2>
						</div>
						<div style="padding:0px 0">
								<input id="myAmount" type="text" style="font-size:25px;" value="0" placeholder="0.0" class="form-control" disabled>
						</div>
						<div style="padding:30px 0">
								<a href="/custom-amountN/"><button class="button button2" aria-label="Tilpasset beløp">Tilpasset beløp&nbsp </button></a>
								<button class="button button3" onclick="Withdraw()" aria-label="Ta ut penger">Ta ut penger &nbsp </button>
							</div>
					</div>
					@include('cancel-buttonN')
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