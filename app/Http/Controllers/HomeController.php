<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    
    public function viewusuarios(){
        $apiusers = Http::get('https://jsonplaceholder.typicode.com/users');
        $usuarios = $apiusers->json();
        return view('usuarios', compact('usuarios'));
    }

    public function viewfotos(){
        $apifotos = Http::get('https://jsonplaceholder.typicode.com/photos');
        $fotos = $apifotos->json();
        return view('fotos',compact('fotos'));
    }

    public function viewposts(){
        $apiposts = Http::get('https://jsonplaceholder.typicode.com/posts');
        $posts = $apiposts->json();
        return view('posts',compact('posts'));
    }
}
