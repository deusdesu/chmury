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
	<link rel="stylesheet" href="{{ asset('css/tresc_glowna.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/menu_gora.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/saper.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/walidacja.css') }}" type="text/css" />
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
					<p><b>SAPER </b></p>
				</div>
				<div class="blok_danych">
					<div id="pole_sapera">
						<div id="tu_wstaw_poleki_sapera"></div>
					</div>
				</div>

			</div>
			<div id="tresc_boczna">
				<div class="blok_danych">
					<p><b> Jak szybko zdołasz wykryć wszystkie bomby? </b></p>
				</div>
				<div class="blok_danych ">Czas:</div>
				<div class="blok_danych ">
					<div id="stopper"></div>
				</div>
				<div class="blok_danych ">
					<div id="il_bomb"></div>
				</div>
				<div class="blok_danych ">
					<div id="il_flag"></div>
				</div>
				<div class="blok_danych "><input type="button" id="od_nowa" value="Zacznij od nowa!"></div>

			</div>
			<footer>Programowanie systemów webowych</footer>
		</main>
	</div>
	<div id="pokaz_mgle"></div>
	<script src="{{ asset('js/walidacja.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/zapiszWynikDoBazy.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<script type="text/javascript" src="{{ asset('js/saper.js') }}"></script>
	<script> 
		typGry = '{{$graTyp}}'
		console.log(typGry)
	</script>
    <script src="{{ asset('js/minesweeper.js') }}"></script>
</body>

</html>