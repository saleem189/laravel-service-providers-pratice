<?php

namespace App\Services;

use App\Services\Interfaces\SocialMediaServiceInterface;
use App\Models\User;

class TwitterService implements SocialMediaServiceInterface {
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }
    public function share(User $user)
    {
        dd('shared on Twitter!');
    }
}

