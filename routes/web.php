<?php

use App\Models\User;
use App\Services\Containers\Container;
use App\Services\Interfaces\SocialMediaServiceInterface;
use App\Services\LinkedInService;
use App\Services\Publications;
use App\Services\TwitterService;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/service', function(){
    $container = new Container;
    /** Step-1   Testing Purpose to check their working just used in web routes  */

        // $container->bind('name', 'saleem khan'); // simple binding with key and value
        
        // $container->bind(TwitterService::class, function(){ //passing calss with callback function
        //     return new TwitterService;
        // });
        
        // dd($container->make(TwitterService::class)); //showing callback function
        // dd($container->make('name')); // showing simple binding with key and value

        // Assume your TwitterService class needs an API key for authentication. In that case, you can do something as follows:
        //     $container->bind('API-KEY',Str::random(40) );
        //     $container->bind(SocialMediaServiceInterface::class, function() use ($container){
        //         return new TwitterService($container->make('API-KEY'));
        //     });
        //     dd($container->make(SocialMediaServiceInterface::class));

        // Create a new LinkedInService class that implements the SocialMediaServiceInterface.
        //     $container->bind(SocialMediaServiceInterface::class, function(){
        //         return new LinkedInService();
        //     });
        //     dd($container->make(SocialMediaServiceInterface::class));

        // Now using this approach in Service container in web.php
        // app()->bind(SocialMediaServiceInterface::class, function(){ //default bind: it it will give different instance or new instance when make. When singleton is use istead of bind it will give single instance however how much new binding is make
        //     return new LinkedInService;
        // });     

        // dd(app()->make(SocialMediaServiceInterface::class), app()->make(SocialMediaServiceInterface::class)); //giving two different instances due to bind (by default working without singleton)
    
    /**   End Testing Purpose to check their working just used in web routes  */
    
    
     /** Step-2  Final code is implemented in AppServiceProvider.php  */  

     /** Step-3 here we will call app() helper function of laravel  */
     $publication = app()->make(Publications::class);

    dd($publication);
});