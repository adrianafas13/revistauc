<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    
    public function index()
    {
        $articles=Article::all();
        $articles=Article::orderBy('created_at','desc')->orderBy('id')->paginate(9);
        return view("articles.index" , compact("articles"));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function seccion($seccion){
        $articles=Article::where('section',$seccion)->paginate();
        return view("articulos" , compact("articles"));
    }

    
    public function store(ArticleRequest $request)
    {
        $enter=$request->all();
        $enter['slug'] = str_slug($enter['title']);

        //carga de imagen de articulo en español
        if($archivoimges=$request->file('image')){

            $infoimges=$archivoimges->getClientOriginalName();

            $archivoimges->move('images', $infoimges);

            $enter['ruta_image']=$infoimges;

        }


        //carga de archivo de articulo en español
        if($archivofilees=$request->file('file')){

            $infofilees=$archivofilees->getClientOriginalName();

            $archivofilees->move('files', $infofilees);

            $enter['ruta_file']=$infofilees;

        }


        //carga de imagen de articulo en ingles
        if($archivoimgen=$request->file('en_image')){

            $infoimgen=$archivoimgen->getClientOriginalName();

            $archivoimgen->move('images', $infoimgen);

            $enter['ruta_en_image']=$infoimgen;

        }


        //carga de archivo de articulo en ingles
        if($archivofileen=$request->file('en_file')){

            $infofileen=$archivofileen->getClientOriginalName();

            $archivofileen->move('files', $infofileen);

            $enter['ruta_en_file']=$infofileen;

        }

        Article::create($enter);

        return redirect("/admin");
    }

    public function show($article){
        $article=Article::with(['comment','comment.user'])->where('slug',$article)->first();

        return view("articles.show" , compact("article"));

    }

    public function edit($id)
    {
        $article=Article::findOrFail($id);

        return view("articles.edit" , compact("article"));
    }

    public function update(Request $request, $id)
    {
        $enter=$request->all();
        $article=Article::findOrFail($id);
        $enter['slug'] = str_slug($enter['title']);
        
        //carga de imagen de articulo en español
        if($archivoimges=$request->file('image')){
            $infoimges=$archivoimges->getClientOriginalName();

            $archivoimges->move('images', $infoimges);

            $enter['ruta_image']=$infoimges;

        }


        //carga de archivo de articulo en español
        if($archivofilees=$request->file('file')){

            $infofilees=$archivofilees->getClientOriginalName();

            $archivofilees->move('files', $infofilees);

            $enter['ruta_file']=$infofilees;

        }


        //carga de imagen de articulo en ingles
        if($archivoimgen=$request->file('en_image')){

            $infoimgen=$archivoimgen->getClientOriginalName();

            $archivoimgen->move('images', $infoimgen);

            $enter['ruta_en_image']=$infoimgen;

        }


        //carga de archivo de articulo en ingles
        if($archivofileen=$request->file('en_file')){

            $infofileen=$archivofileen->getClientOriginalName();

            $archivofileen->move('files', $infofileen);

            $enter['ruta_en_file']=$infofileen;

        }

        $article->update($enter);

        return redirect("/admin/article");
    }

    public function destroy(Article $article){
        $article->delete();
        return redirect("/admin/article");
    }
}