<?php

namespace App\Entity;

use App\Entity\Role;
use App\Entity\Article;
use App\Entity\User as UserEntity;

class User {

    public function __construct()
    {
        //Un code sera tapé un jour peut-être !
    }

    public function save(User $user): User
    {
        $user =  new Role('gaga');
        $UserEntity = new UserEntity();

        return $this;
    }
}