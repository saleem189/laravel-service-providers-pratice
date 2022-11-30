<?php

namespace App\Services;

use App\Models\Post;
use App\Models\User;
use App\Services\Interfaces\SocialMediaServiceInterface;

class LinkedInService implements SocialMediaServiceInterface {
    public function share(User $user)
    {
        dd('shared on LinkedIn!');
    }
}

