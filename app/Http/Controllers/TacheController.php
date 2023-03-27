<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use App\Models\Travaille;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TacheController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(Request $request)
  {
    $projetId = $request->projetId;
    $employes = User::all();
    return view('tache.create', ['employes' => $employes, 'projetId' => $projetId]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $r)
  {

    $tache = new Tache();
    $tache->nom_tache = $r->nom;
    $tache->date_debut = $r->date_debut;
    $tache->date_fin = $r->date_fin;
    $tache->cout = intval($r->cout);
    $tache->projet_id = intval($r->projetId);
    $tache->save();
    // $tach->travailles()->attach($r->employes);
    $tache_id = DB::table('taches')->latest('id')->value('id');
    $travaille = new Travaille();
    foreach ($r->employes as $user_id) {
      $travaille->user_id = $user_id;
      $travaille->tache_id = $tache_id;
      $travaille->save();
    }

    return redirect('projets');
  }

  /**
   * Display the specified resource.
   */
  public function show(Tache $tache)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Tache $tach)

  {

    $employes = User::all();
    return view('tache.edit', ['employes' => $employes, 'tache' => $tach]);
  }


  /**
   * Update the specified resource in storage.
   */
  public function update(Request $r, Tache $tach)
  {


    $tach->nom_tache = $r->nom;
    $tach->date_debut = $r->date_debut;
    $tach->date_fin = $r->date_fin;
    $tach->cout = intval($r->cout);
    $tach->projet_id = $tach->projet_id;
    $tach->save();



    // $trav  = DB::table('travailles')->where('tache_id', '=', $tach->id)->get();

    // foreach ($r->employes as $user_id) {
    //   $trav["user_id"] = $user_id;
    //   $trav->save();
    // }

    return redirect('projets/' . $tach->projet_id);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id)
  // public function destroy(Tache $tache)
  {
    $tache = Tache::findOrfail($id);
    $tache->delete();
    return redirect()->back();
  }
}
