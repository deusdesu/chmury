function generateBoard(width_x, height_y, clickedCell) {
    $.ajax({
        url: "/generate-board",
        type: "POST",  // ✅ Poprawione z GET na POST
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") // Pobieramy token CSRF
        },
        data: {
            width_x: width_x,
            height_y: height_y,
            clicked_cell: clickedCell,
            liczba_bomb: liczba_bomb
        },
        success: function(response) {
            console.log(response);
            poAjaxie(response['board'])
        },
        error: function(xhr) {
            console.error("Błąd:", xhr.responseText);
        }
    });
    }
