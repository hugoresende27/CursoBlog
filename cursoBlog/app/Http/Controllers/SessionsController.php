<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    //
    ///////////////// FUNÇÃO CREATE /////////////////////////////
    public function create()
    {
        return view('sessions.create');
    }

    ///////////////// FUNÇÃO STORE /////////////////////////////
    public function store()
    {
        //validate request
        $atts= request()->validate([
      
            'email'=> 'required|email|exists:users,email',
            'password'=> 'required|min:4'
        ]);
        //attemp to authenticate e log in do user based on credencials
        if (auth()->attempt($atts)){

            session()->regenerate();
            
            //redirect with success flash message
            return redirect("/")->with('success','Welcome Back!');
        }

        // //auth failed
        return back()
            ->withInput()
            ->withErrors(['password' => 'password errada']); 

        // OUTRA MANEIRA SE AUTH FAIL //////
        // throw ValidationException::withMessages([
        //     'password' => 'Wrong password'
        // ]);
        
    }

 

    ///////////////// FUNÇÃO DESTROY /////////////////////////////
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
