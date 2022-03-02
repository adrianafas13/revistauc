<?php

namespace App\Http\Controllers;
use App\Area;
use Illuminate\Http\Request;

class AreasController extends Controller
{

    public function index()
    {
        $areas=Area::all();
        $areas = Area::orderBy('created_at','desc')->orderBy('id')->paginate(10);
        return view("areas.index" , compact("areas"));
    }

    public function create()
    {
        return view('areas.create');
    }

    public function store(Request $request)
    {
        //carga de la informacion de las areas de conocimiento
        $areas=$request->all();
        Area::create($areas);
        return redirect("/admin/areas")->with('message', 'Se ha registrado con éxito');
    }

    public function show($id)
    {
        $areas=Area::findOrFail($id);
        return view("areas.show" , compact("areas"));
    }

    public function edit($id)
    {
        $areas=Area::findOrFail($id);
        return view("areas.edit" , compact("areas")); 
    }

    public function update(Request $request, $id)
    {
        //carga de la informacion de las areas de conocimiento modificada
        $areas=Area::findOrFail($id);
        $areas->update($request->all());
        return redirect("/admin/areas")->with('message-modify', 'Se ha modificado con éxito');
    }

    public function destroy($id)
    {
        $areas=Area::findOrFail($id);
        $areas->delete();
        return redirect("/admin/areas")->with('message-delete', 'Se ha eliminado con éxito');
    }
}
