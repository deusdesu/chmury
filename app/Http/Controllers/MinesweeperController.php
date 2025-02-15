<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinesweeperController extends Controller
{
    public function generateMines(Request $request)
    {
        $width = (int) $request->input('width_x');
        $height = (int) $request->input('height_y');
        $clickedIndex = (int) $request->input('clicked_cell');
        $bombsCount = (int) $request->input('liczba_bomb'); 

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
                $board[$randomIndex] = 1;
                $placedBombs++;
            }
        }

        return response()->json([
            'width' => $width,
            'height' => $height,
            'clickedIndex' => $clickedIndex,
            'bombsCount' => $bombsCount,
            'board'=>$board

    ]);
    }
}
