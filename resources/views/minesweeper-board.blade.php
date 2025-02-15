<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minesweeper Board</title>
    <style>
        .board {
            display: grid;
            grid-template-columns: repeat({{ $width }}, 30px);
            grid-gap: 5px;
        }
        .cell {
            width: 30px;
            height: 30px;
            background-color: lightgray;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .bomb {
            background-color: red;
        }
    </style>
</head>
<body>
    <h1>Minesweeper</h1>
    <div class="board">
        @foreach ($board as $index => $value)
        <p>{{ $index }} - {{ $value }}</p>
    
        @endforeach
    </div>
</body>
</html>
