<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Platforma internetowa dla graczy</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- <script src="JS/index.js"></script> -->
	<link rel="stylesheet" href="css/tresc_glowna.css" type="text/css" />
	<link rel="stylesheet" href="css/menu_gora.css" type="text/css" />
	<link rel="stylesheet" href="css/snake.css" type="text/css" />
	<link rel="stylesheet" href="css/walidacja.css" type="text/css" />

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
					<p><b> SNAKE </b></p>
				</div>
				<div class="blok_danych">
					<div id="snake_div"></div>
				</div>

			</div>
			<div id="tresc_boczna">
				<div class="blok_danych">
					<p><b> Jak dużo owoców zdołasz zjeść? </b></p>
				</div>
				<div class="blok_danych ">Sterowanie:</div>
				<div class="blok_danych ">WASD</div>
				<div class="blok_danych ">Liczba punktów:</div>
				<div class="blok_danych ">
					<div id="liczba_punktów_snake"></div>
				</div>

			</div>
			<footer>Programowanie w środowiskach rozproszonych - Raport zaliczeniowy - Maciej Rak 46241</footer>
		</main>
	</div>
	<div id="pokaz_mgle"></div>
	<script src="js/walidacja.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/zapiszWynikDoBazy.js') }}"></script>

	<script src="{{ asset('js/snake.js') }}"></script>

</body>

</html>