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
				@include('cancel-buttonN')
				<br/><br/>
					<h1 style="text-align:center">Ønsker du å betale regningen</h1>
					<div align="center" vertical-align="center">
						<div style="padding:120px 0">
                            <a href="/bill-paidN/"><button class="button button4" aria-label="Ja">Ja&nbsp</button>
                            <a href="/homeN/">	<button class="button button5" aria-label="Nei">Nei</button>
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