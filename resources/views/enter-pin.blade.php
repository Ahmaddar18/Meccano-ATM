<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Meccano ATM</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
		<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/183786/waves.js"></script>
	</head>
	<body>
		<div class="wrapper">
            	<div id="wizard">
				
					<div align="center">
						<h1 style="text-align:center">Enter Pincode</h1>
					</div>
						<div id="PINcode"></div>
					</div>
				</div>
		</div>
		<footer>
			<small>	Colorlib.com All rights reserved.Theme by Colorlib Powered by WordPress</small>
		</footer>

</body>
<style>
	body {
	background: #3498db;
}

#wizard {
  position: relative;
  background: #fff;
  height: 554px;
  width: 738px;
  padding: 71px 93px 0;
  border-radius: 10px;
  box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, 0.1); }
  #wizard.pt-86 {
	padding-top: 86px; }
	


#PINform input:focus,
#PINform select:focus,
#PINform textarea:focus,
#PINform button:focus {
	outline: none;
}
#PINform {
	background: #ededed;
	position: absolute;
	width: 300px; height: 400px;
	left: 50%;
	margin-left: -180px;
	top: 50%;
	margin-top: -215px;
	padding: 30px;
      -webkit-box-shadow: 0px 5px 5px -0px rgba(0,0,0,0.3);
         -moz-box-shadow: 0px 5px 5px -0px rgba(0,0,0,0.3);
              box-shadow: 0px 5px 5px -0px rgba(0,0,0,0.3);
}
#PINbox {
	background: #ededed;
	margin: 3.5%;
	width: 92%;
	font-size: 4em;
	text-align: center;
	border: 1px solid #d5d5d5;
}
.PINbutton {
	background: #ededed;
	color: #7e7e7e;
	border: none;
	border-radius: 50%;
	font-size: 1.5em;
	text-align: center;
	width: 60px;
	height: 60px;
	margin: 7px 20px;
	padding: 0;
}
.clear, .enter {
	font-size: 1em;
}
.PINbutton:hover {
 	box-shadow: #506CE8 0 0 1px 1px;
}
.PINbutton:active {
 	background: #506CE8;
	color: #fff;
}
.clear:hover {
 	box-shadow: #ff3c41 0 0 1px 1px;
}
.clear:active {
 	background: #ff3c41;
	color: #fff;
}
.enter:hover {
 	box-shadow: #47cf73 0 0 1px 1px;
}
.enter:active {
 	background: #47cf73;
	color: #fff;
}
.shadow{
      -webkit-box-shadow: 0px 5px 5px -0px rgba(0,0,0,0.3);
         -moz-box-shadow: 0px 5px 5px -0px rgba(0,0,0,0.3);
              box-shadow: 0px 5px 5px -0px rgba(0,0,0,0.3);
}
.wrapper {
  max-width: 1400px;
  margin: auto;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center; }
</style>
<script>
	$(function() {
	$( "#PINform" ).draggable();
});

$( "#PINcode" ).html(
	"<form action='' method='' name='PINform' id='PINform' autocomplete='off' draggable='true'>" +
		"<input id='PINbox' type='password' value='' name='PINbox' disabled />" +
		"<br/>" +
		"<input type='button' class='PINbutton' name='1' value='1' id='1' onClick=addNumber(this); />" +
		"<input type='button' class='PINbutton' name='2' value='2' id='2' onClick=addNumber(this); />" +
		"<input type='button' class='PINbutton' name='3' value='3' id='3' onClick=addNumber(this); />" +
		"<br>" +
		"<input type='button' class='PINbutton' name='4' value='4' id='4' onClick=addNumber(this); />" +
		"<input type='button' class='PINbutton' name='5' value='5' id='5' onClick=addNumber(this); />" +
		"<input type='button' class='PINbutton' name='6' value='6' id='6' onClick=addNumber(this); />" +
		"<br>" +
		"<input type='button' class='PINbutton' name='7' value='7' id='7' onClick=addNumber(this); />" +
		"<input type='button' class='PINbutton' name='8' value='8' id='8' onClick=addNumber(this); />" +
		"<input type='button' class='PINbutton' name='9' value='9' id='9' onClick=addNumber(this); />" +
		"<br>" +
		"<input type='button' class='PINbutton clear' name='-' value='clear' id='-' onClick=clearForm(this); />" +
		"<input type='button' class='PINbutton' name='0' value='0' id='0' onClick=addNumber(this); />" +
		"<input type='button' class='PINbutton enter' name='+' value='enter' id='+' onClick=submitForm(PINbox); />" +
	"</form>"
);

function addNumber(e){
	var v = $( "#PINbox" ).val();
	$( "#PINbox" ).val( v + e.value );
}
function clearForm(e){
	$( "#PINbox" ).val( "" );
}
function submitForm(e) {
	if (e.value == "") {
		alert("Enter a PIN");
	}else if (e.value.length <=3){
        alert("Pin cannot be less than 4 character");
	} else {
		data = {
			pin: e.value
		}
		window.location.href = "/withdraw-cash/";
	
		$( "#PINbox" ).val( "" );
	};
};
</script>
</html>