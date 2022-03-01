<?php

namespace App\Manager;

use App\Manager\Role;
use App\Manager\Article;
use App\Manager\User as UserManager;

class User {

    public function __construct()
    {
        //Un code sera tapé un jour peut-être !
    }

    public function save(User $user): User {
        $user =  new User('Lady');
        $userManager = new UserManager();

        return $this;
    }

}