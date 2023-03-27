<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projet::with('taches')->get();

        // return $projets;
        return view('projet.index', compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $prj = new Projet();
        $prj->intitule = $r->input('intitule');
        $prj->Lieu = $r->input('lieu');
        $prj->save();

        return redirect('projets');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projet $projet)
    {
        return view('projet.show', ['projet' => $projet]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projet $projet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projet $projet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projet $projet)
    {
        //
    }
}
