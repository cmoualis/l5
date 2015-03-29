<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $table = 'roles';

    function users()
    {
        return $this->hasMany('App\Models\User');
    }
    function lists(){
        return $this->all()->lists('title','id');
    }

}
