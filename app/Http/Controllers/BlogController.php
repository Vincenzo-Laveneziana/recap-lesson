<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    private $data;

    public function __construct(){
        $this->data = config('blog.data');
    }

    public function index() {
        $post = $this->data;
        
        return view('blog', compact('post'));
    }
}
