<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class UserController extends Controller
{
    public function userview(){

        return view('layouts.admin');
    }
    public function viewAdmin() {
        $admins = admin::all();
        return view('layouts.admin', compact('admins'));
    }

    public function addUser(Request $request) {
        admin::create($request->all());
        return redirect('/admin')->with('message', 'User created successfully!');
    }

    public function editUser($id) {
        $admin = admin::find($id);
        return view('layouts.edit_admin', compact('admin'));
    }

    public function updateUser(Request $request, $id) {
        $admin = admin::find($id);
        $admin->update($request->all());
        return redirect('/admin')->with('message', 'User updated successfully!');
    }
}
