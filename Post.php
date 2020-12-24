<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    protected $table = 'posts';

    public function user_con(){
        return $this->belongsTo('App\User');
    }

    public function Name(){
        $user_id = $this->user_id;
        $user = DB::table('users')->where('id',$user_id)->first();
        $name = $user->name;

        return $name;
    }
}
