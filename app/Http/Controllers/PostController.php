<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller {

    public function show() {
        $posts = DB::table('users')->get();
        dd($posts);
        return view('post.show', ['var1' => 
            '123', 'var2' => '2']);
    }
	
}
?>