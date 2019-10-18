<?php

namespace App\Http\Controllers;

use App\Repository\Uow;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class ObjetController extends Controller
{
    private $uow;
    public function __construct(Uow $uow)
    {
        $this->uow = $uow;
    }

    public function index()
    {
        return $this->uow->objets->all();
    }

    public function query(Request $request, int $startIndex, int $pageSize, int $sortBy, int $sortDr)
    {
        $res = $this->uow->objets->queryble();
        $res = $res->skip($startIndex)
        ->take($pageSize)
        ->orderBy($sortBy, $sortDr);
        return [
            'result' => $res->get(),
            'all' => $request->all()
        ];
    }

    public function search(Request $request)
    {
        // $res = $this->uow->objets->queryble();

        // foreach($request->all() as $key => $value) {
        //     // echo "{$key} => {$value} ";
        //     $res = $res->where($key, 'LIKE', "%{$value}%");
        // }
        $skip = $request->input('skip');
        $take = $request->input('take');
        $sort = $request->input('sort');
        $filters = $request->input('filter');
        $res = $this->uow->objets->queryble()->skip($skip)->take($take);
        if ($sort != null) {
            $pieces = explode(" ", $sort);
            $sortBy = $pieces[0];
            $sortDr =  $pieces[1];

            $res = $res->orderBy($sortBy, $sortDr);
        } else {
            $res = $res->orderBy('id', 'desc');
        }

        // var_dump($filters);
        // dd($filters);
        if ($filters != null) {
            $f = explode(',"and",', substr($filters, 1, -1));
            // dd(json_decode($f[0]));
            foreach ($f as $e){
                $column = json_decode($e)->{'column'};
                $filter = json_decode($e)->{'filter'};
                $value = json_decode($e)->{'value'};
                $res = $res->where($column, 'LIKE', "%{$value}%");
            }
        }


        return [
            'items' => $res->get(),
            // 'filters' => $filters,
            'totalCount' =>  $this->uow->objets->count()
        ];
    }

    public function search2(Request $request): Collection
    {
        $res = $this->uow->objets->queryble();

        foreach($request->all() as $key => $value) {
            // echo "{$key} => {$value} ";
            $res = $res->where($key, 'LIKE', "%{$value}%");
        }
        return $res->get();
    }

    public function pagination(int $startIndex, int $pageSize): Collection
    {
        return $this->uow->objets->pagination($startIndex, $pageSize);
    }

    public function store(Request $request)
    {
        return $this->uow->objets->create($request->all());
        // return [
        //     'me' => $request->all()
        // ];
    }

    public function show($id)
    {
        return $this->uow->objets->findById($id);
    }

    public function update(Request $request, $id)
    {
        return (string) $this->uow->objets->update($request->all(), $id);
    }

    public function destroy($id)
    {
        return $this->uow->objets->delete($id);
    }
}
