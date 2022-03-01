<?php

namespace App\Entity;

use App\Entity\Role as RoleEntity;
use App\Entity\Article;
use App\Entity\User;

class Role {

    public function __construct()
    {
        //Un code sera tapé un jour peut-être !
    }

    public function save(User $user): Role
    {
        $role =  new Role('petit user');
        $RoleEntity = new RoleEntity();

        return $this;
    }
}