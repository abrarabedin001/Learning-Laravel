<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success','Goodbye!');
    }
    public function create()
    {

        return view('sessions.create');
    }
    public function store()
    {
        //validate the request
        // attempt to authenticate and log in the user
        //based on the provided credentials
        //redirect with a success flash message
        $request = request()->validate([
            'email'=>'required|exists:users,email',
            'password'=>'required'
        ]);

        if (auth()->attempt($request))
        {
            session()->regenerate();
            return redirect('/')->with('success','Welcome Back!');
        }
        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified.'
        ]);

        // return back()
        //     ->withInput()
        //     ->withErrors(['email'=>'Your provided credentials could not be verified.']);

    }
}
