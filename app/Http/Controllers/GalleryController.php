<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
class GalleryController extends Controller
{
    public function index()
    {
        $photos = Photo::latest()->get();
        return view('gallery.index', compact('photos'));
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('img'), $imageName);

        Photo::create([
            'image' => $imageName,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Photo added successfully.');
    }
    public function destroy(Photo $photo)
{
    $photo->delete();
    return redirect()->route('gallery.index')->with('success', 'Photo deleted successfully.');
}

}
