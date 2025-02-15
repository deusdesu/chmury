function zapiszWynikDoBazy(login,gameType,value){
    $.ajax({
        url: "/save-game-record", // Ścieżka do zapisania rekordu
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") // Token CSRF
        },
        data: {
            login: login,
            game_type: gameType,
            value: value
        },
        success: function(response) {
            console.log(response);
            alert("ZAPISANO WYNIK!")
            // Możesz wykonać jakąś akcję po zapisaniu rekordu
        },
        error: function(xhr) {
            alert("błąd!", xhr.responseText)
            console.error("Błąd:", xhr.responseText);
        }
    });
}