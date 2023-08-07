<?php

namespace App\Http\Controllers;

//use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Models\User;
use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);
        return view('pages.index', compact('users'));

    }

    public function asd($users)
    {
        $users ? $users = true : $users = false;
        !isNull($users) ? $users = false : $users = true;


    }
}
