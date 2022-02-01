<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Newsletter;

class NewsletterController extends Controller
{
    //
    public function __invoke(Newsletter $newsletter)
    {

        //ddd($newsletter);
        //////////////  VALIDAÇÃO   ///////////////////////////
        request()->validate(['email'=> 'required|email']);
        
         //////////////// ACÇÃO /////////////////////////
        try{
            $newsletter->subscribe(request('email'));
        } catch(\Exception $e) {
       
            throw \Illuminate\Validation\ValidationException::withMessages([
                                                                         'email'=>'This email could not be added'
                                                                             ]);   
         }
         
    ///////////////// REDIRECT ////////////////////////////
    return redirect('/#newsletter')->with('success', 'You are now signed up for our newsletter');

    }
}
