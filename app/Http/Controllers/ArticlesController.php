<?php

namespace App\Http\Controllers;
use App\Article;
use App\Author;
use App\Edition;
use App\Area;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles=Article::all();
        $articles=Article::orderBy('id', 'desc')->paginate(10);
        $authors=Author::all();
        $areas=Area::all();
        return view("articles.index" , compact("articles", "authors", "areas"));
    }

    public function create()
    {
        $editions=Edition::all();
        $authors=Author::all();
        $areas=Area::all();
        return view('articles.create', compact("editions", "authors", "areas"));
    }

    public function store(ArticleRequest $request)
    {
        //carga de la informacion de los articulos
        $enter=$request->all();
        $enter['slug'] = str_slug($enter['title']);

        //carga de imagen de articulo
        if($archivoimges=$request->file('image')){

            $infoimges=$archivoimges->getClientOriginalName();

            $archivoimges->move('images', $infoimges);

            $enter['ruta_image']=$infoimges;

        }

        //carga de archivo pdf de articulo 
        if($archivofilees=$request->file('file')){

            $infofilees=$archivofilees->getClientOriginalName();

            $archivofilees->move('files', $infofilees);

            $enter['ruta_file']=$infofilees;

        }

        Article::create($enter);

        return redirect("/admin/article/")->with('message', 'Se ha registrado con éxito');
    }

    public function show($article){

        $article=Article::with(['comment','comment.user'])->where('slug',$article)->first();
        return view("articles.show" , compact("article", "editions", "authors", "areas"));

    }

    public function edit($id)
    {
        $article=Article::findOrFail($id);
        $editions=Edition::all();
        $authors=Author::all();
        $areas=Area::all();
        return view("articles.edit" , compact("article","editions", "authors", "areas"));
    }

    public function update(Request $request, $id)
    {
         //carga de la informacion del articulo modificado
        $enter=$request->all();
        $article=Article::findOrFail($id);
        $enter['slug'] = str_slug($enter['title']);

        //carga de imagen de articulo en español
        if($archivoimges=$request->file('image')){
            $infoimges=$archivoimges->getClientOriginalName();

            $archivoimges->move('images', $infoimges);

            $enter['ruta_image']=$infoimges;

        }

        //carga de archivo  pdf de articulo modificado
        if($archivofilees=$request->file('file')){

            $infofilees=$archivofilees->getClientOriginalName();

            $archivofilees->move('files', $infofilees);

            $enter['ruta_file']=$infofilees;

        }

        $article->update($enter);

        return redirect("/admin/article")->with('message-modify', 'Se ha modificado con éxito');
    }

    public function destroy(Article $article)
    {
        $article=Article::findOrFail($id);
        $article->delete();
        return redirect("/admin/article")->with('message-delete', 'Se ha eliminado con éxito');
    }
}
