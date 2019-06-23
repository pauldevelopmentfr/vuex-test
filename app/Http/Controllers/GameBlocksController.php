<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GameBlocks;
use App\Game;
use App\Events\GameBlockCreated;
use App\Events\GameBlockClicked;

class GameBlocksController extends Controller
{
    public function fetchBlocks()
    {
        $a = GameBlocks::all();
        return $a;
    }

    public function createBlock(Request $request)
    {
        $count = GameBlocks::all()->count();
        
        if ($count >= 10) {
            return;
        }

        $block = GameBlocks::create($request->all());
        broadcast(new GameBlockCreated($block));
        return response()->json('added');
    }

    public function removeBlocks($id)
    {
        $block = GameBlocks::find($id);
        broadcast(new GameBlockClicked($block));
        GameBlocks::destroy($id);

        $user = Game::where('user', $_SERVER['REMOTE_ADDR'])->first();

        if ($user === null) {
            Game::create([
                'user' => $_SERVER['REMOTE_ADDR'],
                'points' => 1
            ]);
        } else {
            $user->update([
                'points' => $user->points + 1
            ]);
            $user->save();
        }

        return response()->json('deleted');
    }
}
