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
            	<div id="wizard">
				@include('back-buttonN')
				@include('cancel-buttonN')
					<div style="margin-left: auto;margin-right: auto">
						<h1 style="text-align:center">Din regning har betalt</h1>
						<div align="center" vertical-align="center">
								<div style="padding:30px 0">
										<h2 style="text-align:center" aria-label="Vennligst ta ut kortet ditt">Vennligst ta ut kortet ditt</h2>	
								</div>
								<div style="padding:30px 0">

									    <a href="/"><button class="button button2" aria-label="Ferdig">Ferdig</button></a>
								</div>
						</div>
                    </div>
				</div>
		</div>
		<footer>
			<small>	Colorlib.com All rights reserved.Theme by Colorlib Powered by WordPress</small>
		</footer>
</body>
</html>