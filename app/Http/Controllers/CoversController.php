<?php

namespace App\Http\Controllers;

use App\Cover;
use App\User;
use App\Mail\NewEdition;
use Illuminate\Http\Request;

class CoversController extends Controller
{

    public function index()
    {
        $covers=Cover::all();

        return view("covers.index" , compact("covers"));
    }

    
    public function create()
    {
        return view('covers.create');
    }

    
    public function store(Request $request)
    {
        $cover = Cover::first();
        if($cover){
            $cover->delete();
        }
        $enter=$request->all();

        //carga de imagen de articulo en español
        if($archivocoveres=$request->file('es_cover')){

            $infocoveres=$archivocoveres->getClientOriginalName();

            $archivocoveres->move('images', $infocoveres);

            $enter['ruta_es_cover']=$infocoveres;

        }

        //carga de imagen de articulo en español
        if($archivocoveren=$request->file('en_cover')){

            $infocoveren=$archivocoveren->getClientOriginalName();

            $archivocoveren->move('images', $infocoveren);

            $enter['ruta_en_cover']=$infocoveren;

        }

        Cover::create($enter);

        return redirect("/admin");
    }

    
    public function show($id)
    {
        $cover=Cover::findOrFail($id);

        return view("covers.show" , compact("cover"));

    }

    
    public function edit($id)
    {
        $cover=Cover::findOrFail($id);

        return view("covers.edit" , compact("cover"));
    }

    
    public function update(Request $request, $id)
    {
        $cover=Cover::findOrFail($id);

        $cover->update($request->all());

        return redirect("/admin");
    }

    
    public function destroy($id)
    {
        $cover=Cover::findOrFail($id);

        $cover->delete();

        return redirect("/admin");
    }
}
