<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected  $table = "list";
    protected  $fillable = ['name','type','user_id'];
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id','id');
    }

}
