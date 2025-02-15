function generateBoard(width_x, height_y, clickedCell) {
    fetch('/generate-board', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ width_x, height_y, clicked_cell: clickedCell, num_bombs: 10 })
    })
    .then(response => response.json())
    .then(data => {
        console.log("Generated board:", data);
        // Aktualizacja planszy na podstawie odpowiedzi
    })
    .catch(error => console.error("Error:", error));
}
