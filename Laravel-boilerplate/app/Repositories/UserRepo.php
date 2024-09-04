<?php

namespace App\Repositories;

use App\Models\User;

class UserRepo extends BaseRepo
{
    /**
         * UserRepo constructor.
         */
        public function __construct()
        {
            parent::__construct(User::class);
        }

    // Your methods for repository
}
