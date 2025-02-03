<?php

namespace App\controller;

use App\core\Controller;

class Post extends Controller
{
    public function index(){
        $data = [
            'title' => 'Posts'
        ];
        $this->view('posts/index', $data);
    }
    public function show(){
        echo "Show";
    }
}