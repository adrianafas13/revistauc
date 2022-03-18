<?php

namespace App\Http\Controllers;
use App\Area;
use App\Author;
use App\Article;
use App\Edition;
use App\Information;
use App\About;
use App\Comment;
use App\Notice;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        $areas= Area::all();
        $notices=Notice::all();
        $edition= Edition::orderBy('id', 'desc')->get()->first();
        if ($edition){
            $articles = Article::where('edition_id', (int) $edition->id)->orderBy('id','asc')->limit(12)->get();
        }else{
            $articles = [];
        }
        $articlesData = [];
        foreach ($articles as $article){
            $article->author = Author::where('id', (int) $article->author_id)->get()->first();
            $articlesData[] = $article;
        }
//        echo(json_encode($articlesData[0]->author,JSON_PRETTY_PRINT));
//        die();
        $articles = $articlesData;
        return view('/welcome',compact('articles', 'edition', 'areas', 'notices'));
	}

    public function arti($slug){
        $areas= Area::all();
        $article = Article::where('slug',$slug)->get()->first();
        $article->author = Author::where('id', (int) $article->author_id)->get()->first();
        return view('/articulos',compact('article', 'areas'));
    }

    public function areas($id){ 
        $areas= Area::all();
        $articles = Article::where('area_id', 'LIKE', '%'.$id.'%')->paginate(12);
        return view('/area',compact('areas', 'articles')); 
    }

    public function authors(){
        $areas= Area::all();
        $authors=Author::with(['articles'])->orderBy('name_author')->paginate(12);
        return view('/authorsCatalog',compact('authors', 'areas')); 
    }

    public function show($slug){
        $areas= Area::all();
        $authors=Author::orderBy('id', 'desc')->take(1)->get();
        $article=Article::with(['comment','comment.user'])->where('slug',$slug)->first();
        return view("/art", compact('article', 'authors','areas'));

    }

    public function informacion(){
        $areas= Area::all();
        $information=Information::query()->paginate(12);
        return view('/informacion',compact('information', 'areas'));
    }

    public function edicion(){
        $areas= Area::all();
        $editions=Edition::orderBy('id', 'desc')->paginate(12);
        return view('/edicion', compact('editions', 'areas'));
    }
    public function fulledicion($id){
        $areas= Area::all();
        $editions=Edition::where('id', (int) $id)->with(['articles'])->get()->first();
       // dd($editions->articles);
       // $editions->article = Article::where('edition_id', (int) $edition->id)->orderBy('id','asc')->limit(10)->get();
        return view('/fulledition', compact('editions', 'areas'));
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
            ->paginate(10);
        $authors = Author::where('name_author', 'LIKE', '%'.$search_text.'%')
            ->paginate(10);
        $areas = Area::where('area_es', 'LIKE', '%'.$search_text.'%')
            ->orWhere('area_en', 'LIKE', '%'.$search_text.'%')
            ->paginate(10);
        return view('/search', compact('articles','authors', 'areas'));
    }

    public function store(Request $request)
    {
        $this->validate($request, array('comment' => 'required|min:5|max:2000'));
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
