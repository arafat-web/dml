<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrackController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('number')) {
            $trackNumber = $request->number;
            $response = Http::get('http://127.0.0.1:8000/api/track?number=' . $trackNumber);

        } else {
            dd('no number');
        }

        return view('client.track.track', compact('response', 'trackNumber'));
    }
}
