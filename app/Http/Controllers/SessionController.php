<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{

    //
    public function __construct()
    {

    }


    public function index()
    {
        if (Auth::user()) {
            return redirect('/dashboard');
        }

        return view('session.create');
    }

    public function store()
    {
        if (! auth()->attempt(request(['email', 'password']))) {
            return back();
        }

        return redirect('/dashboard');

    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
