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
				@include('back-buttonN')
				@include('cancel-buttonN')
					<h1 style="text-align:center">Vennligst velg tjenesten</h1>
					<div align="center" vertical-align="center">
						<div style="padding:120px 0">
						    <a href="/is-registeredN/"><button class="button button4" aria-label="Telefone">&nbspTelefon&nbsp</button>
						    <a href="/is-registeredN/"><button class="button button5" aria-label="Gass">&nbsp&nbsp&nbspGass&nbsp&nbsp&nbsp</button>
						    <a href="/is-registeredN/"><button class="button button4" aria-label="Elektrisitet">Elektrisitet</button>
						    <a href="/is-registeredN/"><button class="button button5" aria-label="Vann">&nbsp&nbsp&nbspVann&nbsp&nbsp&nbsp</button>
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