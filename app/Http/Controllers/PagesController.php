<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
    	// Passing value to template
    	$title = "Welcome to laravue";
    	$content = "lorem ipsum";
    	// return view('pages.index', compact('title','content'));

    	// 2nd way of passing value
    	// return view('pages.index')->with('title',$title)->with('content',$content);

    	// Pass multiple value / array
    	$data = array(
    		'title' => $title,
    		'content' => $content,
    		'tools' => ['tool1','tool2']
    	);
    	return view('pages.index')->with($data);

    }

    public function about() {
    	return view('pages.about');
    }
}
