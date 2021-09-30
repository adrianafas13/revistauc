<?php

namespace App\Http\Controllers;

use App\Edition;
use Illuminate\Http\Request;
use App\Http\Requests\EditionRequest;

class EditionsController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $editions=Edition::all();
        $editions=Edition::orderBy('id')->paginate(15);
        return view("editions.index", compact("editions"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("editions.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $enter=$request->all();

        //carga de imagen de la edicion en español
        if($edition_es=$request->file('edition_image')){

            $infoedition=$edition_es->getClientOriginalName();

            $edition_es->move('images', $infoedition);

            $enter['edition_route_image']=$infoedition;

        }

        //carga de imagen dela edicion en ingles
        if($esdition_en=$request->file('edition_image_en')){

            $infoedition=$esdition_en->getClientOriginalName();

            $esdition_en->move('images', $infoedition);

            $enter['edition_route_image_en']=$infoedition;

        }

        Edition::create($enter);

        return redirect("/admin/editions");

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $editions=Edition::findOrFail($id);

        return view("editions.show" , compact("edition"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editions=Edition::findOrFail($id);

        return view("editions.edit" , compact("edition"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editions=Edition::findOrFail($id);

        $editions->update($request->all());

        return redirect("/admin/editions");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editions=Edition::findOrFail($id);

        $editions->delete();

        return redirect("/admin/editions");
    }
}
