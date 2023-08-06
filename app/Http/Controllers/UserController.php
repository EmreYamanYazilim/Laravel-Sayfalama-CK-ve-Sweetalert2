<?php

namespace App\Http\Controllers;

//use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);
        return view('pages.index', compact('users'));

    }
}
