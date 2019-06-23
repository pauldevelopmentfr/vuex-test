<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function fetchLeaderboard()
    {
        return DB::table('games')->orderBy('points', 'desc')->take(3)->get();
    }
}
