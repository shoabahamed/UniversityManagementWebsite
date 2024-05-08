<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the uploaded file
        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('assets'), $imageName);

        // Return a response or redirect as needed
        return back()->with('success', 'Image uploaded successfully.');
    }
}
