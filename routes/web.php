<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MinesweeperController;
use App\Http\Controllers\SaperController;
use App\Models\GameRecord;

Route::get('/saper', [SaperController::class, 'take']);

Route::get('/', function () {
    return view('index');
});
Route::get('/galeria', function () {
    return view('galeria');
});
Route::get('/snake', function () {
    return view('snake');
});
Route::get('/sudoku', function () {
    return view('sudoku');
});
Route::get('/ranking', function () {
    $records = GameRecord::all();
    return view('ranking', compact ('records'));
});
Route::get('/test', function () {
    return view('test');
});
Route::post('/generate-board', [MinesweeperController::class, 'generateMines']);



use App\Http\Controllers\MinesweeperTestController;

Route::get('/minesweeper-board', [MinesweeperTestController::class, 'generateBoard']);

use App\Http\Controllers\GameRecordController;

Route::post('/save-game-record', [GameRecordController::class, 'store']);

