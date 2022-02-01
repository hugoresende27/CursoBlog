<?php

namespace App\Services;

use \MailchimpMarketing\ApiClient;

//new Newsletter (new ApiClient); ???

//para fazer subscribe e unsubscribe
class Newsletter 
{

    public function __construct( ApiClient $client)
    {
        $this->client = $client;
    }

    public function subscribe(string $email, string $list = null)
    {

        $list ??= config('services.mailchimp.lists.subs');

        $mailchimp = new \MailchimpMarketing\ApiClient();

        //////////////// ACÇÃO /////////////////////////
    
        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us14'
        ]);
    
       return $this->client->lists->addListMember($list, [
                                                'email_address' => $email,
                                                'status' => 'subscribed'
                                                                ]);
    }

    ////////////////////////////////////////////////////////////////////////////////////

    // protected function client()
    // {
       
    //     return $this->client->setConfig([
    //         'apiKey' => config('services.mailchimp.key'),
    //         'server' => 'us14'
    //     ]);
    // }


}