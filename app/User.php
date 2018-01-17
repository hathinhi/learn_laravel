<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class User extends Model
{
    protected $fillable = [
        'id', 'name'
    ];
    static function getAll(){
        $users = DB::table('users')->select('id','name')->get();
        return  $users;
    }
}
