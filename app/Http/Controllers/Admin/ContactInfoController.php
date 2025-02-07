<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    public function index()
    {
        $contactInfo = ContactInfo::first();
        return view('admin.contact-info.index', compact('contactInfo'));
    }

    public function update(Request $request, ContactInfo $contactInfo)
    {
        $contactInfo->update($request->all());
        return to_route('admin.contact-info.index')->with('success', 'Contact Info updated successfully');
    }
}
