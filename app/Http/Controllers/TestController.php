<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Repository\SuperRepository;
use Illuminate\Http\Request;

class testController extends Controller
{
    private $superRepository;
    public function __construct(SuperRepository $superRepository)
    {
        $this->superRepository = $superRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $c = Customer::all();
        dd($c);
        return $this->superRepository->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $c = new Customer();
        $c->name = 'me';
        $c->save();
        $c->name = 'you';
        $c->save();
        dd($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
