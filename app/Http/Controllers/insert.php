<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class insert extends Controller
{
    //
    public function add(Request $req){
        $data = new forms;
        $data->name = $req->name;
        $data->uname = $req->uname;
        $data->dob = $req->dob;
        $data->email = $req->email;
        $data->phone = $req->phone;
        $data->nic = $req->nic;
        $data->male = $req->male;
        $data->female = $req->female;
        $data->other = $req->other;
        $data->password = $req->password;
        $data->repassword = $req->repassword;
        $data->save();
        return redirect ('form');
    }
}

public function details(){
    $data = form::all();
    return view('details',['data'->$data]);
}
