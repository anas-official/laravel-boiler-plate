<?php

namespace App\Services;
use App\Repositories\UserRepo;

class UserService extends BaseService
{
    private $_UserRepo;
    public function __construct()
        {
            parent::__construct(UserRepo::class);
            $this->_UserRepo = new UserRepo();
        }

    // Your methods for service
}
