<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NerdController extends Controller
{
    //

 /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
         // get all the nerds
        $nerds = Nerd::all();

        // load the view and pass the nerds
        return View::make('nerds.index')->with('nerds', $nerds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
                return View::make('nerds.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //

         $nerds = new NerdModel;

        $nerds->name = $request->name;
        $nerds->email = $request->email;
        $nerds->nerd_level = $request->nerd_level ;

        $nerds->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
