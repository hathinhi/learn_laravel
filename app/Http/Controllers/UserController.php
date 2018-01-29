<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
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
    public function detail($id){
        return view('user.detail')->with('id', $id);
    }
    public function addUser(){
        return view('user.add');
    }
    public function addSave(Request $request){
        $name = $request->input('name');
        echo $name;
    }

}