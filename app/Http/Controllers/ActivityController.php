<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function index()
    {
        // Fetch all activities
        $activities = Activity::all();

        return view('activities.index', ['activities' => $activities]);
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

        // // Validate the request
        // $request->validate([
        //     'title' => 'required|string',
        //     'description' => 'required|string',
        //     'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as needed
        // ]);

        // Handle image upload if needed
        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo');
            $photoName = time() . '.' . $uploadedPhoto->getClientOriginalExtension();
            $uploadedPhoto->storeAs('public/photos', $photoName);
            $activity->photo = 'storage/photos/' . $photoName;
        }
        
        $activity->save();

        // // Create a new activity
        // Activity::create([
        //     'title' => $request->input('title'),
        //     'description' => $request->input('description'),
        //     'photo' => $photoPath,
        // ]);

        return response()->json(['message' => 'Posted.']);
        // return redirect()->route('activities.index')->with('success', 'Activity added successfully!');
    }

    public function destroy($id)
    {
        // Find the activity by ID
        $activity = Activity::findOrFail($id);

        // Delete the activity
        $activity->delete();

        return redirect()->route('activities.index')->with('success', 'Activity deleted successfully!');
    }
}
