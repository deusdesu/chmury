let id_owocu; // numer pola w którym umieszczony jest owoc
let last_direction; // okresla ostatnio wywołany kierunek - zapobiega błędowi
const width_x = 10;
const height_y = 10;
let snake_head = 70; //parseInt( (width_x * height_y) / 2 - width_x / 2) ;
let snake_size = 3; // zmienna okrelajaca wielkosc snaka na pcozatku jak i w trakcie zdobywania punktów
let snake_position = [snake_head, snake_head + width_x, snake_head + 2 * width_x]; // zmienna okreslajca która pola aktualnie sa zajete. uzywana w generatorze punktów jak, bedzie okreslac polożenie snake
let direction = 'up'; //
let period_of_time = 150;	
let liczba_punktów=0;
//koniec
const divs = document.getElementsByTagName("div");

if(!localStorage.getItem("snake_liczba")){
	localStorage.setItem( "snake_liczba",0 );
}
function reset(){
	 snake_head = 70; //parseInt( (width_x * height_y) / 2 - width_x / 2) ;
	 snake_size = 3; // zmienna okrelajaca wielkosc snaka na pcozatku jak i w trakcie zdobywania punktów
	 snake_position = [snake_head, snake_head + width_x, snake_head + 2 * width_x]; // zmienna okreslajca która pola aktualnie sa zajete. uzywana w generatorze punktów jak, bedzie okreslac polożenie snake
	 direction = 'up'; //
	
	 period_of_time = 150;
	
	 liczba_punktów=0;
	}
	


//porazka();
utworzSnake(); // wywołuje f letsgo
//////////////////////////////////////////////////////////////////////////
function porazka(){
	
	for(div of divs){
		div.style.filter = "blur(3px)"
	}
	docID("pokaz_mgle").style.width="100%";
	docID("pokaz_mgle").style.filter="blur(0)";
	
	docID("pokaz_mgle").innerHTML=`<div id="formularz"><form><input type="text" class = "koniec" placeholder="pseudonim" onfocus="this.placeholder=''" onblur="this.placeholder='pseudonim'" id="login"><div id="login_walidacja"></div><input class = "koniec" type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'" id="haslo"><div id="haslo_walidacja"></div>Twój wynik to: <b>`+liczba_punktów+`</b><input  type="button" id="wyslij" value="Zapisz swój wynik!"></form></div>`;
	
	docID("wyslij").addEventListener("click", function(){
		zapisz_wynik();
	});
	//
}

function zapisz_wynik(){
	if(sprawdzPole("snake")){
		//zapis do localstorage
		let wyniki = {};
		wyniki.lp = liczba_punktów;
		wyniki.login = docID('login').value;
		wyniki.haslo = docID('haslo').value;
		localStorage.setItem("snake"+localStorage.getItem("snake_liczba"), JSON.stringify(wyniki));
		
		aktualna_liczba = localStorage.getItem("snake_liczba");
		localStorage.setItem( "snake_liczba",++aktualna_liczba );
		//reset mgły
		docID("pokaz_mgle").innerHTML='';
		for(div of divs){
			div.style.filter = "blur(0px)";
		}
		docID("pokaz_mgle").style.width="0%";
		//powrót do rozgrywki
		wyczysc_snake();
		reset();
		
		utworzSnake();	
	}	
}
function utworzSnake() {
	docID("liczba_punktów_snake").innerHTML = liczba_punktów;
    start(); // poleki
    snake_place(); // umieszcza snake
    umiesc_owoc();
    interwal = setInterval(co_1_s, period_of_time); //funkcja wywoływana co okrelon iloć czas
	
}

function co_1_s() {
    snake_move();
    czy_zjadl() ;

}

function czy_zjadl(){
    if( snake_position[ 0 ] == id_owocu){
        snake_position[ snake_position.length ] = snake_position[ snake_position.length-1];
        umiesc_owoc();
		docID("liczba_punktów_snake").innerHTML = ++liczba_punktów;

		
    }
}

function umiesc_owoc(){
    let czy_rozne = true;
    let pole_owocu = Math.floor((Math.random()* width_x * height_y) + 0); 
    for (;;) {
        for (var i = 0; i < snake_position.length; i++) {
            if( snake_position[ i ] == pole_owocu ){
                czy_rozne = false;
                //break;
            }
        }
        if( !czy_rozne ){
            i = -1;
            czy_rozne = true;
            pole_owocu = Math.floor( (Math.random() * width_x * height_y) + 0 );
        }
        else break;
    }
    id_owocu = pole_owocu;
    docID('id'+pole_owocu).innerHTML = '<div id="owoc"></div>';
}

function snake_move() {
    snake_place(snake_position.length - 1); // usuwa ostatnie pole ogona snake
    for (var i = snake_position.length - 1; i >= 1; i--) {
                snake_position[i] = snake_position[ i-1 ];
    }
    switch (direction) { // modyfikuje tab połozenia snake
        case 'up': // jeżeli jest na górnej granicy i idzie w góre to wylatuje dołem
            if( snake_position[0] >= 0 && snake_position[0] <= 9  ){
                snake_position[0] += 90;
            }
            else snake_position[0] -= width_x;
            break;

        case 'right':// jeżeli jest na prawej granicy i idzie w prawo to wylatuje lew strona
            if( (snake_position[0]+1) % 10 ==  0 ){
                snake_position[0] -= 9;
            }
            else snake_position[0] += 1;
            break;
            
        case 'down':
            if( snake_position[0] >= 90 && snake_position[0] <= 99  ){
                snake_position[0] -= 90;
            }
            else snake_position[0] += width_x;
            break;
        case 'left':
            if( snake_position[0] % 10 ==  0 ){
                snake_position[0] += 9;
            }
            else snake_position[0] -= 1;
            break;
    }
    czy_granica_pola();
    czy_trafil_snake();

    snake_place(); //rysuje snake
    last_direction = direction;
}

function czy_trafil_snake(){
    for (var i = 1; i < snake_position.length; i++) {
        if(snake_position[0] == snake_position[i]){
			clearInterval(interwal);
			porazka();
           // snake_place();
            break;
        }
    }
}

function wyczysc_snake(){
    for (var i = 0; i < snake_position.length; i++) {
        docID('id' + snake_position[i]).innerHTML = '';
    }
}

function czy_granica_pola(kierunek){
    if( kierunek == 'up' ){
        return true;
    }
}

function snake_place(remove) { // zp danych w tabeli snake_position umieszcza snaka na polu
    
    for (var i = 1; i < snake_position.length; i++) {
        docID('id' + snake_position[i]).innerHTML = '<div class="tail"></div>';
    }
    if (remove != undefined) {
        docID('id' + snake_position[remove]).innerHTML = '';
    }
	docID('id' + snake_position[0]).innerHTML = '<div id="head"></div>';
}




// tworzy poleki
function start() {
    var poleek = '';
    for (i = 0; i < width_x * height_y; i++) {
        /*  wyznacz(i);*/
        if (i % width_x == 0) poleek = poleek + '<div style="clear:both;"></div>';
        poleek = poleek + '<div class="pole" id=id' + i + '></div>'; /* sprawdz_nr_id_kliknietego_elementu('+i+') */
    }
    poleek = poleek + '<div style="clear:both;"></div>';
    docID("snake_div").innerHTML = poleek;
}

// wykrywanie skrzałek, zmiana direction tj kierunku
document.onkeypress = function(e) {
    e = e || window.event;
    // sprawdzanie prawego przycisku myszy
    switch (e.key) {
        case 'w': 
            if (direction != 'down' && last_direction != 'down') {
                direction = 'up';
            }
            break;
        case 'd':
            if (direction != 'left' && last_direction != 'left') {
                direction = 'right';
            }
            break;
        case 's':
            if (direction != 'up' && last_direction != 'up') {
                direction = 'down';
            }

            break;
        case 'a':
            if (direction != 'right' && last_direction != 'right') {
                direction = 'left';
            }

            break;
    }
};
//skrót document.getElementById(id);
function docID(id) {
    return document.getElementById(id);
}