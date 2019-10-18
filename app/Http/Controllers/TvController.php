<?php

namespace App\Http\Controllers;

use App\Repository\Uow;
use Illuminate\Http\Request;
use App\Tv;

class TvController extends Controller
{
    private $uow;
    public function __construct(Uow $uow)
    {
        $this->uow = $uow;
    }

    public function index()//: array
    {
        // $c = Tv::all();
        // dd($c);
        // $t = $this->uow;
        // dd($t);
        return $this->uow->tvs->all();
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {

        $c = new Customer();
        $c->name = 'me';
        $c->save();
        $c->name = 'you';
        $c->save();
        dd($id);
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
