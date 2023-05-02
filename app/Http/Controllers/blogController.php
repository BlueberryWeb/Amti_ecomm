<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function __invoke(){
        return view('Blog.blog');
    }
}
