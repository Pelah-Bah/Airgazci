<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Famille;

class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $familles = Famille::all();
        return view ('familles.index')->with('familles', $familles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('familles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Famille::create($input);
        return redirect('famille')->with('flash_message', 'Famille Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $famille = Famille::Find($id);
        return view('familles.show')->with('familles', $Famille);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Famille = Famille::Find($id);
        return view('familles.edit')->with('familles', $Famille);
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
        //
        $Famille = Famille::Find($id);
        $input = $request->all();
        $Famille->update($input);
        return redirect('famille')->with('flash_message', 'Famille Updared');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Famille::destroy($id);
        return redirect('famille')->with('flash_message', 'Famille deleted!');
    }
}
