<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    /** 
     * The attributes that are mass assignable.
     * @var  array
     * 
     */
    protected $fillable = ['quantity_positions'];
}
