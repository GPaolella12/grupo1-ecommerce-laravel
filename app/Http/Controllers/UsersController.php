<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    
    public function detail($id)
    {
        $user = User::find($id);

        return view('profile', compact('user'));
    }

    public function edit($id){
        $user = User::find($id);

        return view('editUser', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);

        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        $user->save();

        return redirect("/perfil/$request->id");
    }
}
