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
					<p><b>Witaj na naszej platformie internetowej o grach. Mamy nadzieję, że miło spędzisz ten czas.
						</b></p>
				</div>
				<div class="blok_danych">Poniżej znajdziesz informacje o grach, a powyżej możesz w nie zagrać.</div>
				<div class="blok_danych pomoc">
					<div class="img"><img src="img/1_snake.jpg"></div>
					<article>
						<b>Snake</b> – gra komputerowa, wydana po raz
						pierwszy w październiku 1976 roku pod nazwą <b>Blockade</b><sup>[1]</sup> i spopularyzowana na
						przełomie XX i XXI wieku dzięki wersjom dla telefonów komórkowych firmy
						<b>Nokia</b><sup>[2]</sup>.
					</article>
				</div>
				<div class="blok_danych pomoc">
					<div class="img"><img src="img/2_saper.png"></div>
					<article>
						<b>Saper</b> (tytuł oryginalny <b>Minesweeper</b>) – klasyczna jednoosobowa gra komputerowa
						napisana w 1981 roku przez <b>Roberta Donnera</b>, dostępna jako akcesorium w każdym systemie
						Microsoft Windows do wersji 7. Od wersji 8 i RT dostępne do ściągnięcia w sklepie
						Windows<sup>[3]</sup> (istnieją też wersje dla innych systemów operacyjnych). Gra polega na
						odkrywaniu na planszy poszczególnych pól w taki sposób, aby nie natrafić na minę. Na każdym z
						odkrytych pól napisana jest liczba min, które bezpośrednio stykają się z danym polem (od zera do
						ośmiu). Jeśli oznaczymy dane pole flagą, jest ono zabezpieczone przed odsłonięciem, dzięki czemu
						przez przypadek nie odsłonimy miny.
					</article>
				</div>
				<div class="blok_danych pomoc">
					<div class="img"><img src="img/3_sudoku.png"></div>
					<article>
						<b>Sudoku</b> (jap. 数独 sūdoku; od <b>sū</b>ji wa
						<b>doku</b>shin ni kagiru, czyli cyfry muszą być pojedyncze) – łamigłówka, której celem jest
						wypełnienie diagramu <b>9 × 9</b> w taki sposób, aby w każdym wierszu, w każdej kolumnie i w
						każdym
						z dziewięciu pogrubionych kwadratów 3 × 3 (zwanych „blokami” lub „podkwadratami”) znalazło się
						po
						jednej cyfrze od 1 do 9. Zasady przypominają trochę kwadrat łaciński, wymyślony i badany przez
						średniowiecznych matematyków z terenów Arabii (XIII wiek). W sudoku, w przeciwieństwie do
						kwadratu
						łacińskiego, cyfry nie mogą się powtarzać nie tylko w żadnym wierszu i kolumnie, ale także w
						małym
						kwadracie 3 × 3. Sudoku międzynarodową sławę zyskało dopiero w <b>2005</b> r.<sup>[4]</sup>
					</article>
				</div>
			</div>
			<div id="tresc_boczna">
				<div class="blok_danych ">Przypisy:</div>
				<div class="blok_danych ">1. <a
						href="https://www.arcade-history.com/?n=blockade&page=detail&id=287">www.arcade-history.com</a>
				</div>
				<div class="blok_danych ">2. <a href="https://gadzetomania.pl/58062,snake-nokia-waz-online"> Snake: wąż,
						który zmienił mobilną rozrywkę. </a>[dostęp 2024-05-05]</div>
				<div class="blok_danych ">3. <a href="https://pl.wikipedia.org/wiki/Saper_(gra_komputerowa)">
						Minesweeper </a></div>
				<div class="blok_danych ">4. <a href="https://pl.wikipedia.org/wiki/Sudoku"> Sudoku </a></div>
			</div>
			<footer>Programowanie systemów webowych</footer>
		</main>
	</div>
</body>

</html>