<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class UserController extends Controller
{
    public function userview(){

        return view('layouts.admin');
    }
    public function addUser(request $request){

        admin::create($request->all());
        return redirect('layouts.admin');

    }
}
