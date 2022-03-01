<?php

namespace App\Manager;

use App\Manager\Role;
use App\Manager\Article as ArticleManager;
use App\Manager\User;


class Article {
    public function __construct()
    {
        //Un code sera tapé un jour peut-être !
    }

    public function save(User $user): Article
    {
        $article =  new Article('article');
        $ArticleManager = new ArticleManager();

        return $this;
    }

}