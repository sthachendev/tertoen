<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class ActivityController extends Controller
{
    public function index()
    {
        // Fetch all activities
        $activities = Activity::all();

        return view('activities.index', ['activities' => $activities]);
    }

    public function show($title)
    {
        // Decode the URL-encoded title parameter
        $decodedTitle = urldecode($title);

        // Find the activity by decoded title
        $activity = Activity::where('title', $decodedTitle)->first();

        // Check if the activity exists
        if (!$activity) {
            abort(404); // or handle the "not found" case in a way that fits your application
        }
        return view('activity', ['activity' => $activity]);
    }

    public function create()
    {
        // Show the form to create a new activity
        return view('activities.create');
    }

    public function store(Request $request)
    {
        $activity = new Activity();
        $activity->title = $request->input('title');
        $activity->description = $request->input('description');

        // Handle image upload if needed
        if ($request->hasFile('photo')) {
            // Get the uploaded photo
            $uploadedPhoto = $request->file('photo');

            // Compress the image
            $compressedImage = Image::make($uploadedPhoto)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->encode('jpg', 100); // Specify the desired image format and quality

            // Convert compressed image to binary data
            $binaryImageData = $compressedImage->getEncoded();

            // Store the binary data in the database
            $activity->photo = $binaryImageData;

            // Save the activity
            $activity->save();

            return back()->with('success', 'Activity Posted.');
        }

        // If no photo was uploaded
        $activity->save();
        return back()->with('success', 'Activity Posted.');
    }

    public function destroy($id)
    {
        // Find the activity by ID
        $activity = Activity::findOrFail($id);

        // Delete the activity
        $activity->delete();

        return back()->with('success', 'Activity deleted successfully');
    }
}
