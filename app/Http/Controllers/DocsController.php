<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Parsedown;

class DocsController extends Controller
{
    public function index(Request $request)
    {
    	$resPath = 'pages';
    	$parsedown = new Parsedown; 

    	$readFile = $resPath.'/'.$request->path().".md";
    	if (file_exists($readFile)) {
    		$files = file_get_contents($readFile);
    	} else {
    		$files = "Sorry no data found";
    	}
    	$text = $parsedown->text($files);
    	return view('main', ['text' => $text]);
    }
}
