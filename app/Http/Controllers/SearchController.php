<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Gallery;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        try {
            $search = $request->input('search');

            $activities = Activity::where(function ($query) use ($search) {
                $query->where('title', 'like', "%$search%")
                    ->orWhere('description', 'like', "%$search%");
            })->get(); // Execute the query and retrieve results

            $images = Gallery::where(function ($query) use ($search) {
                $query->where('name', 'like', "%$search%");
            })->get(); // Execute the query and retrieve results

            return view('search', compact('activities', 'images'));
        } catch (\Exception $e) {
            // Handle any exceptions
            return back()->withError('An error occurred during search.');
        }
    }


}
