<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NbaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $date = $request->query('date');
        $response = Http::get("https://api.sportsdata.io/v3/nba/scores/json/ScoresBasic/{$date}", [
            "key" => config('sportsdata.apiKey'),
        ]);



        if (!$response->ok()) {
            return view('score', [
                'error' => $response->getReasonPhrase(),
                'code' => $response->getStatusCode(),
                'success' => false,
            ]);
        }

        return view('score', [
            'success' => true,
            'code' => $response->getStatusCode(),
            'data' => $response->json()
        ]);
    }

}
