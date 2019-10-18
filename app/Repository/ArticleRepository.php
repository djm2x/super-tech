<?php
namespace App\Repository;

use App\Article;

class ArticleRepository extends SuperRepository {

    // model property on class instances
    public function __construct()
    {
        parent::__construct(new Article());
    }
}
