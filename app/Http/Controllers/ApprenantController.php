<?php

namespace App\Http\Controllers;

use App\Tuteur;
use App\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apprenants=Apprenant::all();
        return view('listapprenant',['apprenants'=>$apprenants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formapprenant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Apprenant::create([
        'nom'=>$request->nom,
        'prenom'=>$request->prenom,
        'date'=>$request->date,
        'ville'=>$request->ville,
        'formation'=>$request->formation,
        'etablissement'=>$request->etablissement,
        'telephone'=>$request->telephone,
        'email'=>$request->email,
        'genre'=>$request->genre,
        'photo'=>$request->photo,
        'projet'=>$request->projet,
       ]);
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
    }
}
