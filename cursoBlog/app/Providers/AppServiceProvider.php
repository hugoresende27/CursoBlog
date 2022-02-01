<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

use App\Services\MailchimpNewsletter;
use App\Services\Newsletter;
use App\Services\ConvertKitNewsletter;
use \MailchimpMarketing\ApiClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        //$this->app->bind('foo', function() {
        // app()->bind('foo', function() {
        //     return 'bar';
        // });

        app()->bind(Newsletter::class, function(){

            $client = new ApiClient;

            $client->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us14'
            ]);

            return new MailchimpNewsletter($client);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //Paginator::use
        Model::unguard();
    }
}
