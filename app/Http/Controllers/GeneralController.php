<?php

namespace App\Http\Controllers;

use App\Cover;
use App\Article;
use App\Contact;
use App\About;
use App\Comment;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at','desc')->orderBy('id')->paginate(9);
        $covers=Cover::all();
    	return view('/welcome',compact('articles','covers'));
	}

     public function arti(){
        $articles = Article::orderBy('created_at','desc')->orderBy('id')->paginate(9);
        return view('/articulos',compact('articles'));
    }

    public function authors(){
        return view('/authorsCatalog');
    }

    public function show($slug){
        $article=Article::with(['comment','comment.user'])->where('slug',$slug)->first();

        return view("art" , compact("article"));

    }

    public function contacto(){
        $contacts=Contact::all();
        return view('/contacto',compact('contacts'));
    }

    public function sobre(){
        $abouts=About::all();
        return view('/sobrenosotros',compact('abouts'));
    }

	public function setlocale($locale){
        \App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

    public function search(Request $request){
        $search_text = $_GET['query'];
        $articles = Article::where('title', 'LIKE', '%'.$search_text.'%')
            ->orWhere('en_title', 'LIKE', '%'.$search_text.'%')
            ->orWhere('author', 'LIKE', '%'.$search_text.'%')
            ->paginate(9);

        return view('/search', compact('articles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, array(

            'comment' => 'required|min:5|max:2000'
        ));

        if(Auth::user()->id== $id){
        $user = User::find($id);
        $article = Article::find($article_id);

        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->approved = true;
        $comment->article()->associate($id);
        $comment->user()->associate($id);

        $comment->save();

        }
        return redirect()->route('/art/{article}', [$article->id]);
    }
}
