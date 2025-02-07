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

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'slug' => 'required|string|max:50|unique:services',
            'short_description' => 'required|string|max:50',
            'description' => 'required|string',
            'icon' => 'required|string|max:50',
            'active' => 'required|boolean',
        ]);
        Service::create($data);
        return redirect()->route('admin.services.index')->with('success', 'Service created successfully');
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
