<?php

namespace App\Http\Controllers;

class PostController extends Controller {

    public function show() {
        return view('post.show', ['var1' => 
            '123', 'var2' => '2']);
    }
	
}
?>