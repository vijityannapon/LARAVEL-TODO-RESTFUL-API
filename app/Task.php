<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable =  ['task', 'content', 'status', 'created_at', 'updated_at'];
}
