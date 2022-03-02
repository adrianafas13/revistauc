<?php
namespace App\Http\Controllers;
use App\Author;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;

class AuthorsController extends Controller
{

    public function index()
    {
        $authors=Author::all();
        $authors=Author::orderBy('created_at','desc')->orderBy('id')->paginate(10);
        return view("authors.index" , compact("authors"));
    }

    public function create()
    {
        return view("authors.create");
    }

    public function store(Request $request)
    {
        //carga de la informacion del autor
        $authors=$request->all();

        //carga de imagen del autor
        if($authorimg=$request->file('image_author')){

            $infoimg=$authorimg->getClientOriginalName();

            $authorimg->move('images', $infoimg);

            $authors['route_image_author']=$infoimg;

        }
        Author::create($authors);

        return redirect("/admin/authors")->with('message', 'Se ha registrado con éxito');

    }

    public function show($id)
    {
        $author=Author::findOrFail($id);
        return view("authors.show" , compact("author"));
    }


    public function edit($id)
    {
        $author=Author::findOrFail($id);
        return view("authors.edit", compact("author"));
    }

    public function update(Request $request, $id)
    {
        //carga de la informacion del autor modificada
        $enter=$request->all();

        $authors=Author::findOrFail($id);

        //carga de la imagen del autor modificada
        if($authorimg=$request->file('image_author')){

            $infoimg=$authorimg->getClientOriginalName();

            $authorimg->move('images', $infoimg);

            $enter['route_image_author']=$infoimg;

        }

        $authors->update($enter);

        return redirect("/admin/authors")->with('message-modify', 'Se ha modificado con éxito');
    }

    public function destroy($id)
    {
        $author=Author::findOrFail($id);
        $author->delete();
        return redirect("/admin/authors")->with('message-delete', 'Se ha eliminado con éxito');
    }
}
