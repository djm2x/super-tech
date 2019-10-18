<?php

namespace App\Http\Controllers;

use App\Repository\Uow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    private $uow;
    public function __construct(Uow $uow)
    {
        $this->uow = $uow;
    }

    public function index()
    {
        return $this->uow->articles->all();
    }



    public function search(Request $request)
    {
        $res = $this->uow->articles->queryble();

        foreach($request->all() as $key => $value) {
            // echo "{$key} => {$value} ";
            $res = $res->where($key, 'LIKE', "%{$value}%");
        }
        return $res->get();
    }

    public function pagination(int $startIndex, int $pageSize)
    {
        return $this->uow->articles->pagination($startIndex, $pageSize);
    }

    public function store(Request $request)
    {
        return $this->uow->articles->create($request->all());
    }

    public function show($id)
    {
        // dd($id);
        return $this->uow->articles->findById($id);
    }

    public function update(Request $request, $id)
    {
        return (string) $this->uow->articles->update($request->all(), $id);
    }

    public function destroy($id)
    {
        return $this->uow->articles->delete($id);
    }
}
