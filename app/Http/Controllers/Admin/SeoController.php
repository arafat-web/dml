<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index()
    {
        $seos = Seo::all();
        return view('admin.seo.index', compact('seos'));
    }

    public function create()
    {
        return view('admin.seo.create');
    }

    public function store(Request $request)
    {
       $data = $request->validate([
            'title'       => 'required |max:60',
            'description' => 'required|max:160',
            'keywords'    => 'required|max:10',
            'author'      => 'required|max:50',
            'page_name'   => 'required|max:50',
        ]);
        Seo::create($data);
        return redirect()->route('admin.seo.index')->with('success', 'Seo created successfully');
    }

    public function edit(Seo $seo)
    {
        return view('admin.seo.edit', compact('seo'));
    }

    public function update(Request $request, Seo $seo)
    {
        $data = $request->validate([
            'title'       => 'required |max:60',
            'description' => 'required|max:160',
            'keywords'    => 'required|max:10',
            'author'      => 'required|max:50',
            'page_name'   => 'required|max:50',
        ]);
        $seo->update($data);
        return redirect()->route('admin.seo.index')->with('success', 'Seo updated successfully');
    }

    public function show(Seo $seo)
    {
        return view('admin.seo.show', compact('seo'));
    }

    public function destroy(Seo $seo)
    {
        $seo->delete();
        return redirect()->route('admin.seo.index')->with('success', 'Seo deleted successfully');
    }
}
