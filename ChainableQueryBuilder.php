<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    public function index(Request $request){
    	$lessonBuilder = (new Lesson)->newQuery();

    	if($request->has('difficulty')){
    		$lessonBuilder->where('difficulty','=',$request->difficulty);
    	}

    	if($request->exists('popular')){
    		$lessonBuilder->orderBy('views','desc');
    	}

    	return $lessonBuilder->get();
    }
}
