<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enum\GraEnum;
use App\Models\GameRecord;

class SaperController extends Controller
{
    public function take()
    {
        $graTyp = GraEnum::SAPER->value;
        $records = GameRecord::all();
        // Przekazujemy dane do widoku
        return view('saper', compact('graTyp','records'));
    }
}
