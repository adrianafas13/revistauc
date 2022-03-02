<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Http\Request;
use App\Http\Requests\InformationRequest;

class InformationController extends Controller
{
    public function index()
    {
        $informations=Information::all();
        $informations=Information::orderBy('created_at','desc')->orderBy('id')->paginate(10);
        return view("information.index" , compact("informations"));
    }
    public function create()
    {
        return view("information.create");
    }
    public function store(Request $request)
    {
        //carga de la informacion 
        $enter=$request->all();

        //carga de la informacion PDF en español
        if($archivoinfo=$request->file('info_file')){

        $infoes=$archivoinfo->getClientOriginalName();

        $archivoinfo->move('files', $infoes);

        $enter['ruta_info_file']=$infoes;

    }

    //carga de la informacion PDF en ingles
    if($archivoinfoen=$request->file('info_en_file')){

        $infoen=$archivoinfoen->getClientOriginalName();

        $archivoinfoen->move('files', $infoen);

        $enter['ruta_info_en_file']=$infoen;

    }

        Information::create($enter);

        return redirect("/admin/information/")->with('message', 'Se ha registrado con éxito');
    }

    public function show($id)
    {
        $informations=Information::findOrFail($id);

        return view("information.show" , compact("information"));
    }

    public function edit($id)
    {
        $informations=Information::findOrFail($id);

        return view("information.edit" , compact("informations"));
    }

    public function update(Request $request, $id)
    {
        $informations=Information::findOrFail($id);

        $informations->update($request->all());

        return redirect("/admin/information")->with('message-modify', 'Se ha modificado con éxito');
    }

    public function destroy($id)
    {
        $informations=Information::findOrFail($id);
        $informations->delete();
        return redirect("/admin/information")->with('message-delete', 'Se ha eliminado con éxito');
    }
}
