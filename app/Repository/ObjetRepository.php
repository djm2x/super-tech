<?php
namespace App\Repository;

use App\Objet;

class ObjetRepository extends SuperRepository {

    // model property on class instances
    public function __construct()
    {
        parent::__construct(new Objet());
    }
}
