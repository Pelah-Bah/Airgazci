<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Famille;
use App\Models\Format;
use App\Models\Bouteille;

class BouteilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bouteilles = Bouteille::latest()->simplePaginate(15);
        return view ('bouteilles.index',compact('bouteilles'))->with('bouteilles', $bouteilles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $familles = Famille::all();
        $formats = Format::all();
        return view('bouteilles.create')->with(array('familles'=>$familles, 'formats'=>$formats));
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
        Bouteille::create($input);
        return redirect('bouteille')->with('flash_message', 'bouteille Addedd!');
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
        $bouteille = Bouteille::Find($id);
        return view('bouteilles.show')->with('bouteilles', $Bouteille);
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
        $Bouteille = Bouteille::Find($id);
        return view('bouteilles.edit')->with('bouteilles', $Bouteille);
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
        $Bouteille = Bouteille::Find($id);
        $input = $request->all();
        $Bouteille->update($input);
        return redirect('bouteille')->with('flash_message', 'Bouteille Updared');
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
        Bouteille::destroy($id);
        return redirect('bouteille')->with('flash_message', 'Bouteille deleted!');
    }
}