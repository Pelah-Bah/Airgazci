<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bouteillestocker;

class BouteillestockerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$bouteillestockers = Bouteillestocker::all();
        //return view ('bouteillestockers.index')->with('bouteillestockers', $bouteillestockers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bouteillestockers.create');
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
        Bouteillestocker::create($input);
        return redirect('production')->with('flash_message', 'production Addedd!');
        //$bouteillestockers = Bouteillestocker::where('productions_id','productions_id')->get();
        //return view('productions.show')->with('bouteillestockers', $bouteillestockers);
        //return redirect('productions.show')->with('bouteillestockers', $bouteillestockers);
        //return redirect('production/show')->with('flash_message', 'Bouteillestocker Addedd!');
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
        //$nBps = nBp::all();
        //$bouteilles = Bouteille::all();
        //$selectednBp = $Bouteille->nBp->pluck('id')->all();
        //
        $bouteillestocker = Bouteillestocker::Find($id);
        return view('bouteillestockers.edit', compact('Bouteille', 'bouteilles', 'nBps', 'selectednBp'))->with('bouteillestockers', $production);
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
        $Bouteillestocker = Bouteillestocker::Find($id);
        $input = $request->all();
        $Bouteillestocker->update($input);
        return redirect('bouteillestocker')->with('flash_message', 'bouteillestocker Updated');
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
        bouteillestocker::destroy($id);
        return redirect('bouteillestocker')->with('flash_message', 'bouteillestocker deleted!');
    }
}
