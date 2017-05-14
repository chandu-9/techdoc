<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Parsedown;

class DocsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search) {
            $path_to_check = 'pages/';
            $needle = $request->search;

            foreach (glob($path_to_check . '*.md') as $filename) {
                foreach (file($filename) as $fli => $fl) {
                    if (strpos($fl, $needle) !== false) {
                        $uri = explode('.', str_replace('pages/', '', $filename));
                        
                        //To highlight matched string
                        $fl = preg_replace("/($needle)/i","<b style='color:skyblue'>$1</b>",$fl);
                        //return $request->redirect('/'.$uri[0]);
                        /*
                        return view('main', 
                            // ['text' => $fl.'<blockquote><a href='.$uri[0]. '>Get More details</a> Match found on line ' . ($fli+1).'</blockquote>'
                            ['text' => '<a href='.$uri[0].' title="on line no:'.($fli+1).'">'.$fl.'</a>'
                        ]);
                        */
                    }
                }
            }
        }
        
    	$parsedown = new Parsedown; 
        $path = (@$uri[0] && @file_exists('pages/'.@$uri[0].".md")) ? $uri[0] : $request->path();
        
    	$readFile = 'pages/'.$path.".md";

    	if (file_exists($readFile)) {
    		$files = file_get_contents($readFile);
    	} else {
    		$files = "Sorry no data found";
    	}

    	$text = $parsedown->text($files);
        if ($request->search) {
            $text = preg_replace("/($request->search)/i","<b style='color:skyblue'>$1</b>",$text);
        }

    	return view('main', ['text' => $text]);
    }
}
