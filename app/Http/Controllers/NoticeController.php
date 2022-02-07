<?php

namespace App\Http\Controllers;
use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices=Notice::all();

        return view("notices.index" , compact("notices"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notices = Notice::first();
        if($notices){
            $notices->delete();
        }
        $enter=$request->all();

        Notice::create($enter);

        return redirect("/admin/notices")->with('message', 'Se ha registrado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notices=Notice::findOrFail($id);

        return view("notices.show" , compact("notices"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notices=Notice::findOrFail($id);

        return view("notices.edit" , compact("notices"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $notices=Notice::findOrFail($id);

        $notices->update($request->all());

        return redirect("/admin/notices")->with('message-modify', 'Se ha modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notices=Notice::findOrFail($id);

        $notices->delete();

        return redirect("/admin/notices")->with('message-delete', 'Se ha eliminado con éxito');
    }
}
