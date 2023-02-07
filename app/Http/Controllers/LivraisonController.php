<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livraison;

class LivraisonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $livraisons = Livraison::all();
        return view ('livraisons.index')->with('livraisons', $livraisons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('livraisons.create');
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
        Livraison::create($input);
        return redirect('livraison')->with('flash_message', 'livraison Addedd!');
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
        $livraison = Livraison::Find($id);
        return view('livraisons.show')->with('livraisons', $livraison);
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
        $livraison = Livraison::Find($id);
        return view('livraisons.edit')->with('livraisons', $livraison);
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
        $Livraison = Livraison::Find($id);
        $input = $request->all();
        $Livraison->update($input);
        return redirect('livraison')->with('flash_message', 'livraison Updated'); 
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
        livraison::destroy($id);
        return redirect('livraison')->with('flash_message', 'livraison deleted!');
    }
}
