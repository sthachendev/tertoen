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
            // 'areasOfInterest' => 'nullable|string',
            // 'declaration' => 'required|boolean',
        ]);

        Volunteer::create($request->all());

        // You can customize the redirect URL as needed
        return response()->json(['message' => 'ok.']);
    }
}
