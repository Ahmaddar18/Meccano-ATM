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
					<h1 style="text-align:center">Velg ditt valg</h1>
					<div align="center" vertical-align="center">
						<div style="padding:120px 0">
                        <a href="/enter-pinN/"><button class="button button4" aria-label="Ta ut penger">Ta ut penger</button>
                        <a href="/pay-bill-serviceN/"><button class="button button5" aria-label="Betal en regning">Betal en regning</button>
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
</html>