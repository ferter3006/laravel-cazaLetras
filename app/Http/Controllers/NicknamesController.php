<?php

namespace App\Http\Controllers;

use App\Models\nicknames;
use Illuminate\Http\Request;

class NicknamesController extends Controller
{
    public function post(Request $request)
    {
        $validated = $request->validate([
            'nickname' => 'required|unique:nicknames|max:12',            
        ]);
        $newNick = nicknames::create([
            'nickname' => $request->nickname,
            'actual_stage' => $request->actualStage
        ]);

        return [
            'status' => '1',
            'data' => $newNick
        ];
    }

    public function get(Request $request, $nik)
    {
        $nick = nicknames::where('nickname', $nik)->get();

        return [
            "status" => '1',
            "data" => $nick
        ];
    }
}
