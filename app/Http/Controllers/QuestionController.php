<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Question;

class QuestionController extends Controller
{
    public function create()
    {
        dd('asa');
        $question = new Question;
        return view('question.create')->with('question', $question);
    }

    public function store(Request $request, $stage_id)
    {
        //dd($stage_id);
        //dd($request);
        //dd($request->answer);
        $date = Carbon::now();
    	$inputs = array(
    		'type' => $request->type,
    		'statement' => $request->statement,
    		'explanation' => $request->explanation,
    		'stage_id' => $stage_id,
    		'created_at' => $date
    		);
    	$question = Question::create($inputs);

    	$answers = new AnswerController;
    	$answers->store($request, $question->id);

    	return view('question.create');

    }
}
