<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;


class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas=Area::orderBy('id','desc')->paginate(15);
        return view("areas.index" , compact("areas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $areas=new Area;

        /**español**/
        $areas->area_es=$request->area_es;
        /**english**/
        $areas->area_en=$request->area_en;
        
        $areas->save();

        return redirect("/admin/areas"); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $areas=Area::findOrFail($id);
        return view("areas.show" , compact("areas"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $areas=Area::findOrFail($id);
        return view("areas.edit" , compact("areas"));
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
        $areas=Area::findOrFail($id);

        $areas->update($request->all());

        return redirect("/admin/areas");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $areas=Area::findOrFail($id);

        $areas->delete();

        return redirect("/admin/areas");
    }
}
