<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $request->input('email'))->first();

        if (!$user) {
            Session::flash('error', 'No user found. Check your email.'); // Set error message
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput($request->except('password'));
        }

        if (Auth::attempt($credentials)) {
            // Authentication passed

            if (Auth::check()) {
                $user = Auth::user();

                return redirect('/admin/events');
            }

        }

        // Authentication failed
        Session::flash('error', 'Invalid password. Please try again.'); // Set error message
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput($request->except('password'));
    }

    // public function register(Request $request)
    // {
    //     // Validate user registration data
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:8|confirmed',
    //     ]);

    //     if ($validator->fails()) {
    //         return back()
    //             ->withErrors($validator)
    //             ->withInput();
    //     }

    //     // Create and save a new user record using the User model
    //     $user = User::create([
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'password' => Hash::make($request->input('password')),
    //     ]);

    //     // Redirect or perform any other action after registration
    //     // return redirect('/login'); // Redirect to the dashboard or another page
    //     return back()->with('success', 'User added successfully.');
    // }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Session::flush(); // Flush the session
        Auth::logout(); // Log the user out

        return redirect('/admin/login');

    }

}
