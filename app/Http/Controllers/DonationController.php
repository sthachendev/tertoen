<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation; // Assuming Donation is your model

class DonationController extends Controller
{
    public function store(Request $request)
    {

        // Check if a donation with the same values already exists
        $existingDonation = Donation::where('name', $request->input('name'))
            ->where('cid', $request->input('cid'))
            ->where('phone', $request->input('phone'))
            ->where('nationality', $request->input('nationality'))
            ->where('dzongkhag', $request->input('dzongkhag'))
            ->where('gewog', $request->input('gewog'))
            ->where('village', $request->input('village'))
            ->where('donation_type', $request->input('donation_type'))
            ->where('payment_platform', $request->input('payment_platform'))
            ->where('paid_to_bank', $request->input('paid_to_bank'))
            ->where('journal_no', $request->input('journal_no'))
            ->where('amount', $request->input('amount'))
            ->first();

        // If donation already exists, return a response
        if ($existingDonation) {
            return redirect()->back()->with('error', 'Sorry, you have already made this donation. Thank you.');
        }

        // Create a new Donation instance
        $donation = new Donation();
        $donation->name = $request->input('name');
        $donation->cid = $request->input('cid');
        $donation->phone = $request->input('phone');
        $donation->nationality = $request->input('nationality');
        $donation->dzongkhag = $request->input('dzongkhag');
        $donation->gewog = $request->input('gewog');
        $donation->village = $request->input('village');
        $donation->donation_type = $request->input('donation_type');
        $donation->payment_platform = $request->input('payment_platform');
        $donation->paid_to_bank = $request->input('paid_to_bank');
        $donation->journal_no = $request->input('journal_no');
        $donation->amount = $request->input('amount');
        $donation->remarks = $request->input('remarks');

        // Save the donation
        $donation->save();

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Thank you for your donation.');
        // return response()->json(['success' => 'Donation stored successfully!']);

    }
}
