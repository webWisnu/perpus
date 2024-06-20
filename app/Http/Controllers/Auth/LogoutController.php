<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        // Logout user
        Auth::logout();

        // Invalidate session
        $request->session()->invalidate();

        // Regenerate CSRF token
        $request->session()->regenerateToken();

        // Redirect to login page or any other page
        return redirect()->route('login')->with('status', 'You have been logged out!');
    }
}