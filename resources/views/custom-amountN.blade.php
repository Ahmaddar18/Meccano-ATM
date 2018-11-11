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
					<div align="center" vertical-align="center">
							<div style="padding:10px 0">
									<h2>Beløp &nbsp&nbsp&nbsp</h2>
							</div>
							<div style="padding:0px 0">
									<input id="myAmount" type="text" style="font-size:25px;" value="0" placeholder="0.0" class="form-control" disabled>
							</div>
						<div style="padding:30px 10px 0">
							<button class="button button4" onclick="addAmmount('1')" aria-label="en">1 &nbsp</button>
							<button class="button button4" onclick="addAmmount('2')" aria-label="to">2 &nbsp </button>
							<button class="button button4" onclick="addAmmount('3')" aria-label="tre">3 &nbsp</button>
						</div>
						<div style="padding:10px 10px 0">
							<button class="button button4" onclick="addAmmount('4')" aria-label="fire">4 &nbsp</button>
							<button class="button button4" onclick="addAmmount('5')" aria-label="fem">5 &nbsp</button>
							<button class="button button4" onclick="addAmmount('6')" aria-label="seks">6 &nbsp</button>
						</div>
						<div style="padding:10px 10px 0">
								<button class="button button4" onclick="addAmmount('7')" aria-label="sju">7 &nbsp</button>
								<button class="button button4" onclick="addAmmount('8')" aria-label="åtte">8 &nbsp</button>
								<button class="button button4" onclick="addAmmount('9')" aria-label="ni">9 &nbsp</button>
							</div>
							<div style="padding:10px 0">
									<button class="button button4" onclick="addAmmount('0')" aria-label="nul">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp0 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
									<button class="button button4" onclick="addAmmount('C')" aria-label="klar">&nbsp&nbsp Klar &nbsp&nbsp</button>
								</div>

						<div style="padding:10px 0">
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
		var txtValue = document.getElementById("myAmount").value;
		console.log(txtValue)
		if(txtValue == "0")
		document.getElementById("myAmount").value =  x; 
		else if (x == "C")
		document.getElementById("myAmount").value =  "0"; 
		else
		document.getElementById("myAmount").value =  txtValue + x; 
	}
	function Withdraw()
	{
		alert(document.getElementById("myAmount").value+" Money has been withdrawn" )
	}
</script>
</html>