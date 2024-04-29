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
        return view('article.index');
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
            'img' => $request->has('img') ? $request->file('img')->store('public/img') : 'pic/default.png',]);


        return redirect()->back()->with('message', 'Articolo creato con successo');

    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}