<?php

namespace App\Entity;

use App\Entity\Role;
use App\Entity\Article as ArticleEntity;
use App\Entity\User;

class Article {

    public function __construct()
    {
        //Un code sera tapé un jour peut-être !
    }

    public function save(User $user): Article
    {
        $article =  new Article('article Entity');
        $ArticleEntity = new ArticleEntity();

        return $this;
    }
}