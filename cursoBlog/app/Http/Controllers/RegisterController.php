<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{

    //////////////// CREATE ///////////////////////////////////
    public function create()
    {
        ///echo 'hello world';
        return view ('register.create');
    }

    //////////////// STORE ///////////////////////////////////
    public function store()
    {
        //var_dump(request()->all());
        $attributes= request()->validate([
            'name'=> 'required|max:255',
            'username'=> 'required|min:3|max:255|unique:users,username',
           // 'username'=> ['required|min:3|max:255', Rule::unique('users','username')],
            'email'=> 'required|email|max:255|unique:users,email',
           // 'password'=> 'required|max:255|min:4',    //posso passar as validation rules por array
            'password'=> 'required|min:4'
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        //dd('sucess validation succeed');
        //User::create($attributes);

        //podia ser feito assim:
        
        // User::create([
        //     'name'=>$attributes['name'],
        //     'password'=>bcrypt($attributes['password'])
        // ]);

        //session()->flash('success','Your account has been created');

        //LOG IN DO USER///////////////////////
        auth()->login(User::create($attributes));

        return redirect('/')->with('success','Your account has been created');
    }
}
