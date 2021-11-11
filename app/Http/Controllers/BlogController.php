<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return("Hola blogs");
    }

    public function create(){
        return("Aqui podrás crear un blog");   
    }

    public function show($blog){
        return("Hola blogs: $blog");
    }
}
