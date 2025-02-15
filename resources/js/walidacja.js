function sprawdzPole(text) {
	return true
	let do_sprawdzenia_login = docID("login").value;
	let do_sprawdzenia_haslo = docID("haslo").value;
	let log, hasl;

		for(i = localStorage.getItem(text+"_liczba") - 1;i>=0;i-- ){
			if(localStorage.getItem(text+i)){ // jezeli istnieje!
				if(do_sprawdzenia_login == JSON.parse(localStorage.getItem(text+i)).login 
				&& do_sprawdzenia_haslo != JSON.parse(localStorage.getItem(text+i)).haslo){
					docID("login_walidacja").innerHTML = "Pseudonim zajęte!";
					return false;
				}
			}
		
		}
	docID("login_walidacja").innerHTML = "";
	return true;
} 

function docID(id) {
    return document.getElementById(id);
}