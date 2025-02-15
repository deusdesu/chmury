<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameRecord;

class GameRecordController extends Controller
{
    public function store(Request $request)
    {
        // Walidacja danych
        $validated = $request->validate([
            'login' => 'required|string|max:255',
            'game_type' => 'required|string|max:255',
            'value' => 'required|string|max:255',
        ]);

        // Tworzymy nowy rekord w tabeli
        $gameRecord = GameRecord::create([
            'login' => $validated['login'],
            'game_type' => $validated['game_type'],
            'value' => $validated['value'],
        ]);

        return response()->json(['success' => true, 'message' => 'Record saved successfully!', 'data' => $gameRecord]);
    }
}
