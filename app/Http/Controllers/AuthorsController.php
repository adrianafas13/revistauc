<?php

namespace App\Http\Controllers;
use App\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{

    public function index()
    {
        $authors=Author::all();
        $authors=Author::orderBy('created_at','desc')->orderBy('id')->paginate(10);
        return view("authors.index" , compact("authors"));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("authors.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author=new Author;
        /**español**/
        $author->name_author=$request->name_author;
        $author->lastname_author=$request->lastname_author;
        $author->email_author=$request->email_author;
        $author->grades_author=$request->grades_author;
        $author->resume_author=$request->resume_author;
        /**english**/
        $author->en_grades_author=$request->en_grades_author;
        $author->en_resume_author=$request->en_resume_author;

        $author->save();
        return redirect("/admin/authors"); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author=Author::findOrFail($id);

        return view("authors.show" , compact("author"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author=Author::findOrFail($id);

        return view("authors.edit", compact("author"));
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
        $author=Author::findOrFail($id);

        $author->update($request->all());

        return redirect("/admin/authors");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author=Author::findOrFail($id);
        $author->delete();
        return redirect("/admin/authors");
    }
}
