<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stage;

class StageController extends Controller
{
    public function index()
    {
    	$stages = Stage::all();
    	return view('stage.index')->with('stages', $stages);
    }

    public function create()
    {
    	$stage = new Stage;
    	dd($stage);
    	return view('stage.create');
    }

    public function store(Request $request)
    {
        $inputs = array(
            'quantity_positions' => $request->quantity_positions
        );
        Stage::create($inputs);
        $stages = Stage::all();
        return view('stage.index')->with('stages', $stages);

    }

    public function show($id)
    {
        $stage = Stage::findOrFail($id);        
        return view('stage.show')->with('stage', $stage);
    }

}
