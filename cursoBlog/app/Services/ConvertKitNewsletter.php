<?php

namespace App\Services;
use App\Services\Newsletter;



//para fazer subscribe e unsubscribe
class ConvertKidNewsletter  implements Newsletter
{

   public function subscribe(string $email, string $list = null)
   {
        //subscribe the user with convertKit-specific
        //API requests
   }

}