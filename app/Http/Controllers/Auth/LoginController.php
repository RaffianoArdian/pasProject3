<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{

public function showLoginForm()
{
    return view('cats.login'); // This assumes you have a view named 'login.blade.php' in the 'auth' directory
}

public function login(Request $request)
{
    $credentials = $request->only('name', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication was successful
        return redirect()->route('cats.index');
    }

    // Authentication failed
    return back()->withErrors(['nama' => 'These credentials do not match our records.']);
}

public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('cats.index');
}


    use AuthenticatesUsers;



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
