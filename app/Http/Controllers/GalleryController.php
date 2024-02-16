<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery; // Assuming your Product model resides in the 'App\Models' namespace
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function add(Request $request)
    {
        $image = new Gallery();
        $image->name = $request->input('name');

        // Handle image upload if needed
        if ($request->hasFile('image')) {
            // Get the uploaded image
            $uploadedImage = $request->file('image');

            // Compress the image
            $compressedImage = Image::make($uploadedImage)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->encode('jpg', 99); // Specify the desired image format and quality

            // Convert the compressed image to binary data
            $binaryImageData = $compressedImage->getEncoded();

            // Set the binary image data in the database
            $image->image = $binaryImageData;
        }

        // Save the image
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
