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
            $uploadedPhoto = $request->file('photo');
            $photoName = time() . '.' . $uploadedPhoto->getClientOriginalExtension();
            $uploadedPhoto->storeAs('public/photos', $photoName);
            $activity->photo = 'storage/photos/' . $photoName;
        }

        $activity->save();

        return response()->json(['message' => 'Posted.']);
        // return redirect()->route('activities.index')->with('success', 'Activity added successfully!');
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
