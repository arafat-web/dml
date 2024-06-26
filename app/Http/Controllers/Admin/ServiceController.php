<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id', 'desc')->get();
        return view('admin.service.index', compact('services'));
        
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function edit()
    {
        return view('admin.service.edit');
    }

    public function update()
    {
        return true;
    }

    public function show()
    {
        return view('admin.service.show');
    }

    public function destroy()
    {
        return true;
    }
}
