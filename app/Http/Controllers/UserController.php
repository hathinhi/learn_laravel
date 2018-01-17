<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::getAll();
        return view('user.index')->with('users', $users);
    }
}