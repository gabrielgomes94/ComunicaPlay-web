<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['type', 'statement', 'explanation', 'stage_id', 'created_at'];
    
}
