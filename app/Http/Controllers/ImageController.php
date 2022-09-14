<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    // View File To Upload Image
    public function index()
    {
        return view('abris/FormAbri');
    }

    // Store Image
    public function storeImage(Request $request)
    {
        $request->validate([
            'img1' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();

        // Public Folder
        $request->image->move(public_path('img1'), $imageName);

    

        return back()->with('success', 'Image uploaded Successfully!')
        ->with('img1', $imageName);
    }
}
