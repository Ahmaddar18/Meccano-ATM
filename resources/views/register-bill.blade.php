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
					<div align="center" vertical-align="center">
							<div style="padding:10px 0">
									<h2>Please enter your customer number &nbsp&nbsp&nbsp</h2>
							</div>
							<div style="padding:0px 0">
									<input id="myAmount" type="text" style="font-size:25px;" value="0" placeholder="0.0" class="form-control" disabled>
							</div>
						<div style="padding:30px 10px 0">
							<button class="button button4" onclick="addAmmount('1')" aria-label="one">1 &nbsp</button>
							<button class="button button4" onclick="addAmmount('2')" aria-label="two">2 &nbsp </button>
							<button class="button button4" onclick="addAmmount('3')" aria-label="three">3 &nbsp</button>
						</div>
						<div style="padding:10px 10px 0">
							<button class="button button4" onclick="addAmmount('4')" aria-label="four">4 &nbsp</button>
							<button class="button button4" onclick="addAmmount('5')" aria-label="five">5 &nbsp</button>
							<button class="button button4" onclick="addAmmount('6')" aria-label="six">6 &nbsp</button>
						</div>
						<div style="padding:10px 10px 0">
								<button class="button button4" onclick="addAmmount('7')" aria-label="seven">7 &nbsp</button>
								<button class="button button4" onclick="addAmmount('8')" aria-label="eight">8 &nbsp</button>
								<button class="button button4" onclick="addAmmount('9')" aria-label="nine">9 &nbsp</button>
							</div>
							<div style="padding:10px 0">
									<button class="button button4" onclick="addAmmount('0')" aria-label="zero">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp0 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
									<button class="button button4" onclick="addAmmount('C')" aria-label="clear">&nbsp&nbsp Clear &nbsp&nbsp</button>
								</div>

						<div style="padding:10px 0">
								<button class="button button3" onclick="Withdraw()" aria-label="Confirm">Confirm &nbsp </button>
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
		var txtValue = document.getElementById("myAmount").value;
		if(txtValue.length < 8)
		{
		alert("Please enter valid customer number it cannot be less than 8")
		}
		else
		window.location.href = "/pay-bill";
	}
</script>
</html>