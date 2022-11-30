<?php

namespace App\Services\Interfaces;

use App\Models\Post;
use App\Models\User;

interface SocialMediaServiceInterface {
    public function share(User $user);
}

