<?php

namespace App\Http\Controllers;
use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{

    public function index()
    {
        $notices=Notice::all();
        return view("notices.index" , compact("notices"));
    }

    public function create()
    {
        return view('notices.create');
    }

    public function store(Request $request)
    {
        //carga del aviso
        //solo esta permitido un aviso por vez
        $notices = Notice::first();
        if($notices){
            $notices->delete();//si ya hay publicado un aviso se va a eliminar automaticamente para publicar el nuevo
        }
        $enter=$request->all();

        Notice::create($enter);

        return redirect("/admin/notices")->with('message', 'Se ha registrado con éxito');

    }

    public function show($id)
    {
        $notices=Notice::findOrFail($id);
        return view("notices.show" , compact("notices"));
    }

    public function edit($id)
    {
        $notices=Notice::findOrFail($id);
        return view("notices.edit" , compact("notices"));
    }

    public function update(Request $request, $id)
    {
        //carga del aviso modificado
        $notices=Notice::findOrFail($id);
        $notices->update($request->all());
        return redirect("/admin/notices")->with('message-modify', 'Se ha modificado con éxito');
    }

    public function destroy($id)
    {
        $notices=Notice::findOrFail($id);
        $notices->delete();
        return redirect("/admin/notices")->with('message-delete', 'Se ha eliminado con éxito');
    }
}
