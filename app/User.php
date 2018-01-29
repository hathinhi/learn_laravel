<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class User extends Model
{
    protected $fillable = [
        'id', 'name','username','email','password'
    ];
    static function getAll(){
        $users = DB::table('users')->select('id','name','username','email')->get();
        return  $users;
    }
    static function addUser($data){
        DB::table('users')->insert([
            ['name' => $data['name'],'username' => $data['username'],'email' => $data['email'],'password' => $data['password']]
        ]);
    }
}
