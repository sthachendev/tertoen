<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;

class VolunteerController extends Controller
{
    /**
     * Show the form.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        return view('volunteer.form');
    }

    /**
     * Store the form data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        // Check if CID already exists
        $existingVolunteer = Volunteer::where('cid', $request->input('cid'))->first();

        if ($existingVolunteer) {
            return back()->with('error', 'You have already been registered.');
        }

        // Validation - You can customize the validation rules as needed
        $request->validate([
            // 'fullName' => 'required|string',
            // 'gender' => 'required|string',
            // 'cid' => 'required|string',
            // 'dob' => 'required|date',
            // 'village' => 'required|string',
            // 'geog' => 'required|string',
            // 'dzongkhag' => 'required|string',
            // 'nationality' => 'required|string',
            // 'email' => 'required|email',
            // 'phone' => 'required|string',
            // 'mailingAddress' => 'required|string',
            // 'areasOfInterest' => 'nullable|array', // Make sure areasOfInterest is an array
            // 'areasOfInterest.*' => 'string', // Ensure each value in areasOfInterest array is a string
            // 'declaration' => 'required|boolean',
        ]);

        // implode(', ', $request->areasOfInterest);
        $request->merge(['areasOfInterest' => json_encode($request->areasOfInterest)]);

        Volunteer::create($request->all());

        // You can customize the redirect URL as needed
        // return response()->json(['message' => 'ok.']);
        return back()->with('success', 'You have been registered.');

    }

    public function destroy($id)
    {
        // Find the volunteer by ID
        $volunteer = Volunteer::findOrFail($id);

        // Delete the volunteer
        $volunteer->delete();

        return back()->with('success', 'Volunteer data have been deleted.');
    }
}
