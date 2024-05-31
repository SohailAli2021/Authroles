<?php

namespace App\Http\Controllers;
use App\Models\Service;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create()
    {
        return view('Admin.Service.create');
    }

    public function store(Request $req)
    {
        $con = new Service();
        $con->name=$req['name'];
        $con->desc=$req['desc'];
        $con->save();
        return redirect('serdetail');

    }

    public function index()
    {
        $con = Service::all();
        $data =compact('con');
        return view('Admin.Service.index')->with($data);
    }

    public function edit(int $id)
    {
        $con = Service::Where('ser_id',$id)->first();
        return view('Admin.Service.edit',compact('con'));
    }

public function update(Request $req,int $id)
{
    $con = Service::Where('ser_id',$id);
    $con->update([
        'name'=>$req->name,
        'desc'=>$req->desc

    ]);

    return redirect('serdetail');


}

    public function delete(int $id)
    {
        $con =Service::Where('ser_id',$id);
        $con->delete();
        return redirect('serdetail');

    }
}
