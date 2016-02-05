<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\BodyMeasures;
use Illuminate\Support\Facades\Input;


class BodyMeasuresController extends Controller
{
	public function index()
    {
        $measures = BodyMeasures::all();

        return view('edit', compact('measures'));
    }

    public function add() 
    {
    	$this->middleware('auth');
    	$measure = new BodyMeasures();
    	$measure->user_id = Auth::id();
    	$measure->age = Input::get('age');
    	$measure->gender = Input::get('gender');
    	$measure->hair_color = Input::get('hair_color');
    	$measure->hair_lenght = Input::get('hair_lenght');
    	$measure->eye_color = Input::get('eye_color');
    	$measure->height = Input::get('height');
    	$measure->weight = Input::get('weight');
    	$measure->save();

        return redirect('profile');
    }
}
