<?php

namespace App\Http\Controllers;
use App\Edition;
use Illuminate\Http\Request;
use App\Http\Requests\EditionRequest;

class EditionsController extends Controller
{

    public function index()
    {
        $editions=Edition::all();
        $editions=Edition::orderBy('id', 'desc')->paginate(10);
        return view("editions.index", compact("editions"));
    }

    public function create()
    {
        return view("editions.create");
    }

    public function store(Request $request)
    {
        //carga de la informacion de la edición
        $enter=$request->all();

        //carga de imagen de articulo 
        if($editionimg=$request->file('edition_image')){

            $imges=$editionimg->getClientOriginalName();

            $editionimg->move('images', $imges);

            $enter['edition_route_image']=$imges;

        }


        //carga de archivo de articulo
        if($archivoedition=$request->file('edition_full_file')){

            $fileedit=$archivoedition->getClientOriginalName();

            $archivoedition->move('files', $fileedit);

            $enter['edition_route_full_file']=$fileedit;

        }

        Edition::create($enter);

        return redirect("/admin/editions")->with('message', 'Se ha registrado con éxito');

    }

    public function show($id)
    {
        $editions=Edition::findOrFail($id);
        return view("editions.show" , compact("editions"));
    }

    public function edit($id)
    {
        $editions=Edition::findOrFail($id);

        return view("editions.edit", compact("editions"));
    }

    public function update(Request $request, $id)
    {
        //carga de la informacion de la edicion modificada
        $enter=$request->all();

        $editions=Edition::findOrFail($id);

        //carga de la imagen modificada
        if($editionimg=$request->file('edition_image')){

            $imges=$editionimg->getClientOriginalName();

            $editionimg->move('images', $imges);

            $enter['edition_route_image']=$imges;

        }

        //carga del archivo modificado 
        if($archivoedition=$request->file('edition_full_file')){

            $fileedit=$archivoedition->getClientOriginalName();

            $archivoedition->move('files', $fileedit);

            $enter['edition_route_full_file']=$fileedit;

        }

        $editions->update($enter);

        return redirect("/admin/editions")->with('message-modify', 'Se ha modificado con éxito');
    }

    public function destroy($id)
    {
        $editions=Edition::findOrFail($id);
        $editions->delete();
        return redirect("/admin/editions")->with('message-delete', 'Se ha eliminado con éxito');
    }

}
