<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable =  ['subject', 'content', 'status', 'created_at', 'updated_at'];
}
