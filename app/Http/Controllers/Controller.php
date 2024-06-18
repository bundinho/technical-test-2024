<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{

    public function sohwByDate(Request $request)
    {
        $response = Http::get('https://api.sportsdata.io/v3/nba/scores/json/GamesByDate/' . $request->get("date"), [
            "key" => config("sportsdata.apiKey"),
        ]);
    }
}
