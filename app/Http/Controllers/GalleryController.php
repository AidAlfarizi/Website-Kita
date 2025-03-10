<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $photos = Gallery::all();
        return view('gallery', compact('photos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        $imagePath = $request->file('image')->store('gallery', 'public');

        Gallery::create(['image' => $imagePath]);

        return back()->with('success', 'Foto berhasil diunggah!');
    }

    public function destroy($id)
    {
        $photo = Gallery::findOrFail($id);
        Storage::disk('public')->delete($photo->image);
        $photo->delete();

        return back()->with('success', 'Foto berhasil dihapus!');
    }
}
