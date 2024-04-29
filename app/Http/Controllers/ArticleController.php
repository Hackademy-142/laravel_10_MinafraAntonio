<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{


    public function home(){

        return view('welcome');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //mass assigmet
        Article::create([
            'title'=> $request->title,
            'body' => $request->body,
            'img' => $request->has('img') ? $request->file('img')->store('public/img') : 'img/default-image.jpg',]);


        return redirect()->back()->with('message', 'Articolo creato con successo');

    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show' , compact('article'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        if($request->file('img')){
            $img = $request->file('img')->store('public/img');
        }
        else{
            $img = $article->img;
        }

        $article->update([
            'title' => $request->title,
            'body' => $request->body,
            'img' => $img
        ]);

        return redirect(route('index'))->with('message', 'articolo modificato'); //ritorno all pagina index degli articoli

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->back()->with('message', 'articolo eliminato');
    }
}
