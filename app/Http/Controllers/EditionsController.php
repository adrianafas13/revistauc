<?php

namespace App\Http\Controllers;
use App\Edition;
use Illuminate\Http\Request;

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
        $editions=Edition::orderBy('created_at','desc')->orderBy('id')->paginate(15);
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
        $editions=new Edition;

        $editions->number_edition=$request->number_edition;
        /**español**/
        $editions->title_edition=$request->title_edition;
        /**english**/
        $editions->en_title_edition=$request->en_title_edition;

        $editions->save();
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
