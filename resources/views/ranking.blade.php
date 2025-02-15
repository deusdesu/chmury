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
    <link rel="stylesheet" href="css/ranking.css" type="text/css" />
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
                    <p><b> Ranking </b></p>
                </div>
                <div class="blok_danych">
                    <div>
                        <p><b> Sudoku </b></p>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <div class="blok_danych">
                    <div class="pion_maly">Pseudonim</div>
                    <div class="pion_maly">Wynik</div>
                    <div style="clear:both;"></div>
                </div>
                <div class="blok_danych">
                @foreach ($records as $record)
                        @if ($record->game_type === "SUDOKU")
                            <div class="pion_maly">
                                <div id="r_snake_l" >{{ $record->login }}</div>
                            </div>
                            <div class="pion_maly">
                                <div id="r_snake_w">{{ $record->value }}</div>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="blok_danych">
                    <div>
                        <p><b> Snake </b></p>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <div class="blok_danych">
                    <div class="pion_maly">Pseudonim</div>
                    <div class="pion_maly">Wynik</div>
                    <div style="clear:both;"></div>
                </div>
                <div class="blok_danych">
                @foreach ($records as $record)
                        @if ($record->game_type === "SNAKE")
                            <div class="pion_maly">
                                <div id="r_snake_l" >{{ $record->login }}</div>
                            </div>
                            <div class="pion_maly">
                                <div id="r_snake_w">{{ $record->value }}</div>
                            </div>
                        @endif
                    @endforeach
                    <div style="clear:both;"></div>
                </div>



                <div class="blok_danych">
                    <div>
                        <p><b> Saper </b></p>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <div class="blok_danych">
                    <div class="pion_maly">Pseudonim</div>
                    <div class="pion_maly">Wynik</div>
                    <div style="clear:both;"></div>
                </div>
                <div class="blok_danych">
                    @foreach ($records as $record)
                        @if ($record->game_type === "SAPER")
                            <div class="pion_maly">
                                <div id="r_saper_l" >{{ $record->login }}</div>
                            </div>
                            <div class="pion_maly">
                                <div id="r_saper_w">{{ $record->value }}</div>
                            </div>
                        @endif
                    @endforeach
                    <div style="clear:both;"></div>
                </div>
            </div>
            <div id="tresc_boczna">
                <div class="blok_danych ">
                    <p><b>Pełne rankingi</b></p>
                </div>
                <div class="blok_danych ">Ta strona pokazuje ranking wszystkich gier.</div>
                <div class="blok_danych ">W snake liczy się największa ilośc zjedzonych owoców.</div>
                <div class="blok_danych ">W saperze i sudoku liczy się najszybszy czas.</div>
                <div class="blok_danych blok_danych_min_h">Pseudonimy mogą się powtarzać.</div>
            </div>
            @foreach ($records as $record)
    <p>{{ $record->login }} - {{ $record->game_type }} - {{ $record->value }}</p>
@endforeach
            <footer>Programowanie systemów webowych</footer>
        </main>
    </div>
    <script type="text/javascript" src="js/ranking.js"></script>
</body>

</html>