<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $title = 'Welcome';
        $userData = User::get();
        return view('users.index', compact('title', 'userData'));
    }
    public function insert(Request $request)
    {
        //dd($request->all());
        $request->validate([
            "name" => "required|alpha",
            "email" => "required|email",
            "password" => "min:6 | max:8"

        ]);
        //return $request->input();

        $insert = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        $userData = User::insertGetId($insert);
    }
    public function update(Request $request)
    {
    }
    public function show(Request $request)
    {
    }
}
