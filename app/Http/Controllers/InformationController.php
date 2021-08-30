<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information=Information::all();
        $information=Information::orderBy('created_at','desc')->orderBy('id')->paginate(15);
        return view("information.index" , compact("information"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("information.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $information=new Information;
        /**español**/
        $information->information_title=$request->information_title;
        $information->information_text=$request->information_text;
        /**english**/
        $information->en_information_title=$request->en_information_title;
        $information->en_information_text=$request->en_information_text;

        $information->save();
        return redirect("/admin/information"); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $information=Information::findOrFail($id);

        return view("information.show" , compact("information"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $information=Information::findOrFail($id);

        return view("information.edit" , compact("information"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $information=Information::findOrFail($id);

        $information->update($request->all());

        return redirect("/admin/information");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $information=Information::findOrFail($id);
        $information->delete();
        return redirect("/admin/information");
    }
}
