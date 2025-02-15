<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinesweeperTestController extends Controller
{
    public function generateBoard()
    {
        $width = 10;
        $height = 10;
        $clickedIndex = 15;
        $bombsCount = (int) ($width * $height * 0.15); // np. 15% pól to bomby

        // Tworzymy pustą tablicę
        $board = array_fill(0, $width * $height, 0);

        $placedBombs = 0;
        while ($placedBombs < $bombsCount) {
            $randomIndex = rand(0, $width * $height - 1);

            // Unikamy umieszczania bomb w pobliżu klikniętego pola
            $neighboring = [
                $clickedIndex, $clickedIndex - 1, $clickedIndex + 1,
                $clickedIndex - $width, $clickedIndex - $width - 1, $clickedIndex - $width + 1,
                $clickedIndex + $width, $clickedIndex + $width - 1, $clickedIndex + $width + 1,
            ];

            if ($board[$randomIndex] == 0 && !in_array($randomIndex, $neighboring)) {
                $board[$randomIndex] = 1; // Umieszczamy bombę
                $placedBombs++;
            }
        }

        // Przekazujemy dane do widoku
        return view('minesweeper-board', compact('board', 'width', 'height'));
    }
}
