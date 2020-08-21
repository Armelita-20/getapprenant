<?php

namespace App\Http\Controllers;

use App\Tuteur;
use App\Apprenant;
// use Symfony\Component\HttpFoundation\Session\Session;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

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
        $armelle=Tuteur::all();
        return view('listapprenant',['apprenants'=>$apprenants, 'tuteur'=>$armelle]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $armelle=Tuteur::all();

        return view('formapprenant',['tuteur'=>$armelle]);
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
        'tuteurs_id'=>$request->tuteurs_id,


        'nom'=>$request->nom,
        'prenom'=>$request->prenom,
        'date'=>$request->date,
        'ville'=>$request->ville,
        'formation'=>$request->formation,
        'etablissement'=>$request->etablissement,
        'telephone'=>$request->telephone,
        'email'=>$request->email,
        'genre'=>$request->genre,
        'photo'=>$request->photo->store('public/photo', 'public'),
        'projet'=>$request->projet,
       ]);
       return Redirect('formapprenant');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($apprenant)
    {

         $apprenant = Apprenant::find($apprenant);


        return view('detail', ['apprenant'=>$apprenant]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $id)
    {
        $miseajour=Apprenant::where('id', '=', $id)->first();
       return view('miseajourapprenant', compact(Apprenant::class));
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
        $miseajour= Apprenant::find($request->id);
        $miseajour->id=$request->id;
        $miseajour->nom=$request->nom;
        $miseajour->prenom=$request->prenom;
        $miseajour->date=$request->date;
        $miseajour->ville=$request->ville;
        $miseajour->id=$request->id;
        $miseajour->formation=$request->formation;
        $miseajour->etablissement=$request->etablissement;
        $miseajour->telephone=$request->telephone;
        $miseajour->email=$request->email;
        $miseajour->tuteurs_id=$request->tuteurs_id;
        $miseajour->genre=$request->genre;
        $miseajour->photo=$request->photo;
        $miseajour->projet=$request->projet;
        $miseajour->save();
        return redirect('miseajourapprenant');
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $supprimer=Apprenant::find($request->id);
        $supprimer->delete();
        return redirect('listapprenant');
    }


}
