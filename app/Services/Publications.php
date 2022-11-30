<?php

namespace App\Services;

use App\Models\User;
use App\Services\Interfaces\SocialMediaServiceInterface;

class Publications {
    // public function __construct(TwitterService $twitterService) //getting specific class 
    // {
    //     $this->twitterService = $twitterService;
    // }

    protected $DEFALUT_VALUE = 'this is varable in Publication class to show ';
    protected $socialMediaServices;

    /**
     * Now instead of depending on a single class, this Publication will accept any class that implements the SocialMediaServiceInterface.
     */
    public function __construct(SocialMediaServiceInterface $socialMediaService)
    {
        $this->socialMediaServices = $socialMediaService;
    }

    public function publish(User $user)
    {
        $user->publish();

        $this->socialize($user);
    }

    protected function socialize($post)
    {
        $this->twitterService->share($post);
    }
}

