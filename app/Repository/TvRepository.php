<?php
namespace App\Repository;

use App\Tv;

class TvRepository extends SuperRepository {

    // model property on class instances
    public function __construct()
    {
        parent::__construct(new Tv());
    }
}
