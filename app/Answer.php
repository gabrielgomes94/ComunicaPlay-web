<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    //
    protected $fillable = ['text', 'is_correct', 'created_at', 'question_id'];
    
}
