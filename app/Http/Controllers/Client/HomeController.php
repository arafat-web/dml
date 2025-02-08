<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $seoContent = Seo::where('page_name', 'home')->first();
        return view('client.home.index', compact('seoContent'));
    }
}
