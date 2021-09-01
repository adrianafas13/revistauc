<?php
 
namespace App\Http\Controllers;

use App\Carousel;
use Illuminate\Http\Request;
use App\Http\Requests\CarouselRequest;


class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousel=Carousel::all();
        $carousel=Carousel::orderBy('created_at','desc')->orderBy('id')->paginate(3);
        return view("carousel.index" , compact("carousel"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carousel.create');
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

        //carga de imagen de articulo en español
        if($carouseles=$request->file('es_image_carousel')){

            $infocarousel=$carouseles->getClientOriginalName();

            $carouseles->move('images', $infocarousel);

            $enter['route_image_carousel']=$infocarousel;

        }

        //carga de imagen de articulo en español
        if($carouselen=$request->file('en_image_carousel')){

            $infocarousel=$carouselen->getClientOriginalName();

            $carouselen->move('images', $infocarousel);

            $enter['en_route_image_carousel']=$infocarousel;

        }

        Carousel::create($enter);

        return redirect("/admin/carousel");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carousel=Carousel::findOrFail($id);

        return view("carousel.show" , compact("carousel"));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carousel=Carousel::findOrFail($id);

        return view("carousel.edit", compact("carousel"));
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
        $carousel=Carousel::findOrFail($id);

        $carousel->update($request->all());

        return redirect("/admin/carousel");
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel=Carousel::findOrFail($id);

        $carousel->delete();

        return redirect("/admin/carousel");
    }
}
