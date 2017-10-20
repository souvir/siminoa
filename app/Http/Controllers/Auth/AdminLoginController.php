<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['adminLogout']]);
    }

    /**
     * Show the admin's login form.
     */
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    /**
     * Handle an admin login request to the application.
     */
    public function login(Request $request)
    {
        //validate the form DOMCdataSection
        $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required|min:6',
    ]);

        //Attemp to log the Admin in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            //If successful, then redirect to their intended location
            return redirect()->intended(route('admin.dashboard'));
        }

        //If unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->ony('email', 'remember'));
    }

    /**
     * Log the admin out of the application.
     */
    public function adminLogout()
    {
        Auth::guard('admin')->logout();

        return redirect('/');
    }
}
