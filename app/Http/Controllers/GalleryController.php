<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery; // Assuming your Product model resides in the 'App\Models' namespace

class GalleryController extends Controller
{
    public function add(Request $request)
    {
        $image = new Gallery();
        $image->name = $request->input('name');
        
        // Handle image upload if needed
        if ($request->hasFile('image')) {
            $uploadedImage = $request->file('image');
            $imageName = time() . '.' . $uploadedImage->getClientOriginalExtension();
            $uploadedImage->storeAs('public/gallery', $imageName);
            $image->image = 'storage/gallery/' . $imageName;
        }
    
        $image->save();
    
        return back()->with('success', 'Image added to gallery.');
    }

    public function deleteImage($id)
    {
        $product = Gallery::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        // Delete the image if it exists
        if ($product->image) {
            $imagePath = public_path('images') . '/' . $product->image;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $product->delete();

        return back()->with('success', 'Image deleted successfully');
    }
    
}
