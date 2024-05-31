<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('User.contact');
    }


    public function store(Request $req)
    {
        $con = new Contact();
        $con->name=$req['name'];
        $con->email=$req['email'];
        $con->subject=$req['subject'];
        $con->msg=$req['message'];
        $con->save();

        return redirect()->back();
    }

    public function index()
    {
        $con = Contact::all();
        $data =compact('con');
        return view('Admin.Contact.index')->with($data);
    }



    public function edit(int $id)
    {
        $con = Contact::Where('con_id',$id)->first();
        return view('Admin.Contact.edit',compact('con'));
    }


    public function update(Request $req,int $id)
    {
        $con = Contact::Where('con_id',$id);
        $con->update([
            'name'=>$req->name,
            'email'=>$req->email,
            'subject'=>$req->subject,
            'msg'=>$req->message
        ]);
        return redirect('contactdetails');
    }


    public function delete(int $id)
    {
        $con = Contact::Where('con_id',$id);
        $con->delete();
        return redirect()->back();
    }

    
}
