<?php

namespace App\Manager;

use App\Manager\Role as RoleManager;
use App\Manager\Article;
use App\Manager\User;

class Role {
    public function __construct()
    {
        //Un code sera tapé un jour peut-être !
    }

    public function save(User $user): Role
    {
        $role =  new Role('Rédac');
        $roleManager = new RoleManager();

        return $this;
    }
}