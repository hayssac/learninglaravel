<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index() {
        //$posts = Post::all();
        $posts = Post::latest()->get();
        //$posts = Post::orderBy('created_at', desc)->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {
        return view ('posts.show', compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {

        //dd => método onde você faz toda a execução e joga na página
        //dd(request()->all()); -> retorna tutto
        //dd(request('title')); -> retorna apenas o título
        //dd(request('body')); -> retorna apenas o corpo
        //dd(request(['title', 'body'])); -> retorna o título e o corpo
        
        /*
        //Create a new post using the request data
        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');

        //Save it to the database
        $post->save();
        */

        // Na validação, se algo der errado, ele volta para a página anterior
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        //Another way to do it
        Post::create(request(['title', 'body']));

        //And then redirect to the homepage
        return redirect('/');

    }
}
