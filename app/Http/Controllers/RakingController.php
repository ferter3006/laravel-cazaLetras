<?php

namespace App\Http\Controllers;

use App\Models\ranking;
use DateTime;
use Illuminate\Http\Request;

class RakingController extends Controller
{
    public function index(Request $request, $stage)
    {
        $selection = ranking::where('stage', $stage)->orderBy('points')->limit(10)->get();

        return [
            'status' => '1',
            'data' => $selection,
        ];
    }

    public function post(Request $request, $stage)
    {
        //$user = User::create(['name' => 'John']);

        if ($request->keypassword !== "159-ferter-1234000") {
            return [
                "message" => "Unautorized por Gilipollas"
            ];
        }

        $newRankin = ranking::create([
            'stage' => $request->stage,
            'nickname' => $request->nickname,
            'points' => $request->points
        ]);

        $selection = ranking::where('stage', $stage)->orderBy('points')->limit(10)->get();

        return [
            'status' => '1',
            'savedData' => $newRankin,
            'data' => $selection
        ];
    }
}
