<?php

namespace App\Providers;

use App\Services\Interfaces\SocialMediaServiceInterface;
use App\Services\LinkedInService;
use App\Services\TwitterService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // app()->bind('API-KEY', 'dsadas');
        // $api = 'fsdfsdfsdf';  // when using twitterservice
        $this->app->bind(SocialMediaServiceInterface::class, function(){  // when using twitterservice ('class',function() use ($api){});
            return new LinkedInService;
            // return new TwitterService($api); when using twitterservice
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
    }
}
