    // Funkcja do obsługi kliknięcia na obrazie
    function powieksz(obraz) {
        // Pobierz adres URL klikniętego obrazu
        var src = obraz.src;
        
        // Utwórz element <div> dla okna powiększenia
        var powiekszenie = document.createElement('div');
        powiekszenie.className = 'powiekszenie';
        
        // Utwórz element <img> dla powiększonego obrazu
        var img = document.createElement('img');
        img.src = src;
        
        // Dodaj obraz do okna powiększenia
        powiekszenie.appendChild(img);
        
        // Dodaj okno powiększenia do ciała dokumentu
        document.body.appendChild(powiekszenie);
        
        // Funkcja do zamknięcia okna powiększenia po kliknięciu
        powiekszenie.onclick = function() {
            document.body.removeChild(powiekszenie);
        };
    }
    
    // Pobierz wszystkie obrazy w klasie "gal" i przypisz do nich funkcję powieksz
    var obrazy = document.getElementsByClassName('gal');
    for (var i = 0; i < obrazy.length; i++) {
        obrazy[i].onclick = function() {
            powieksz(this.getElementsByTagName('img')[0]);
        };
    }
