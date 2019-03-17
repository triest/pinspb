<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {

        $users = User::select(['id', 'name'])->get();

        return view('users.index')->with(["users" => $users]);
    }

    public function list()
    {
        $users = User::select()->get();


        return response()->json([$users]);
    }
}
