<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;
use App\Models\Stockage;
use App\Models\Bouteille;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productions = Production::latest()->simplePaginate(15);
        return view ('productions.index', compact('productions'))->with('productions', $productions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productions.create');
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
        Production::create($input);
        return redirect('production')->with('flash_message', 'production Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        //
        $ep = Stockage::all();
        $production = Production::Find($id);
        //
        $epjs = Stockage::where('productionsidStockages',$id)->get();
        $prodbouteillevides = Bouteille::where('etatBouteilles','=' ,'vide')->get();
        return view ('productions.show')->with(array('production'=>$production, 'epjs'=> $epjs , 'ep'=> $ep , 'prodbouteillevides'=> $prodbouteillevides));

        $input = $request->all();
        Stockage::create($input);
        return redirect('productions');
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
        $production = Production::Find($id);
        return view('productions.edit')->with('productions', $production);
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
        $Production = Production::Find($id);
        $input = $request->all();
        $Production->update($input);
        return redirect('production')->with('flash_message', 'production Updated');
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
        production::destroy($id);
        return redirect('production')->with('flash_message', 'production deleted!');
    }


}