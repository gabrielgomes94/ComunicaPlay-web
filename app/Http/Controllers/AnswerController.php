<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Answer;

class AnswerController extends Controller
{
    public function store(Request $request, $questionID){
    	//array answers
    	$answers = $request->answer;
        $datetime = Carbon::now();       
    	foreach($answers as $key => $answer)
    	{
            $correct = false;
            foreach($request->is_correct as $is_correct){
                if($is_correct==$key){
                    $correct = true;
                    break;    
                }
            }
    		$inputs = array(
    			'text' => $answer,
    			'is_correct' => $correct,
    			'created_at' => $datetime,
                'question_id' => $questionID
    			);
    		Answer::create($inputs);    		
    	}
        return view('home');
    }

}
