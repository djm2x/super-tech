<?php
namespace App\Repository;

class Uow {
    public $tvs;
    public $articles;
    public $objets;

    public function __construct() {
        // dd('here');
        $this->tvs = new TvRepository();
        $this->objets = new ObjetRepository();
    }
}
