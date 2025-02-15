<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Platforma internetowa dla graczy</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <script src="JS/index.js"></script> -->
	<link rel="stylesheet" href="css/tresc_glowna.css" type="text/css" />
	<link rel="stylesheet" href="css/menu_gora.css" type="text/css" />
	<link rel="stylesheet" href="css/galeria.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
</head>

<body>
	<div id="kontener">
		<div id="sticky">
            <div class="menu_gora"><a href="{{ url(path: '/') }}">Strona główna</a></div>
            <div class="menu_gora"><a href="{{ url('/snake') }}">Snake </a></div>
			<div class="menu_gora"><a href="{{ url('/saper') }}">Saper</a></div>
			<div class="menu_gora"><a href="{{ url('/sudoku') }}">Sudoku</a></div>
			<div class="menu_gora"><a href="{{ url('/ranking') }}">Ranking</a></div>
			<div class="menu_gora"><a href="{{ url('/galeria') }}">Galeria</a></div>
		</div>
		<main>
			<div id="tresc_glowna">
				<div class="blok_danych">
					<p><b> Galeria gier </b></p>
				</div>

				<div class="blok_danych ">
					<div class="gal"><img src="https://storage.googleapis.com/moj-projekt-galeria/g_1_1.jpg">
					</div>
					<div class="gal"><img src="https://storage.googleapis.com/moj-projekt-galeria/g_1_2.jpg">
					</div>
					<div class="gal"><img src="https://storage.googleapis.com/moj-projekt-galeria/g_1_3.jpg">
					</div>
					<div style="clear:both">
					</div>
				</div>

				<div class="blok_danych ">
					<div class="gal"><img src="https://storage.googleapis.com/moj-projekt-galeria/g_2_1.jpg">
					</div>
					<div class="gal"><img src="https://storage.googleapis.com/moj-projekt-galeria/g_2_2.jpg">
					</div>
					<div class="gal"><img src="https://storage.googleapis.com/moj-projekt-galeria/g_2_3.jpg">
					</div>
					<div style="clear:both">
					</div>
				</div>

				<div class="blok_danych ">
					<div class="gal"><img src="https://storage.googleapis.com/moj-projekt-galeria/g_3_1.png">
					</div>
					<div class="gal"><img src="https://storage.googleapis.com/moj-projekt-galeria/g_3_2.jpg">
					</div>
					<div class="gal"><img src="https://storage.googleapis.com/moj-projekt-galeria/g_3_3.jpg">
					</div>
					<div style="clear:both">
					</div>
				</div>

			</div>
			<div id="tresc_boczna">
				<div class="blok_danych ">Galeria zdjęć przedstawia różne wizje tych samych gier.</div>
				<div class="blok_danych ">Od góry snake, saper oraz sudoku.</div>
			</div>
			<footer>Programowanie systemów webowych</footer>
		</main>
	</div>
	<script type="text/javascript" src="js/galeria.js">
	</script>

</body>

</html>j