<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class Employe extends Controller
{


  function Inscription(Request $request)
  {
    if ($request->isMethod('get')) {


      return view('inscreption');
    } else {

      $request->validate([
        'fname' => ['required', 'string', 'max:255'],
        'lname' => ['required', 'string', 'max:255'],
        'poste' => ['required', 'string', 'max:255'],
        'salaire' => ['required', 'numeric'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
      ]);

      $user = User::create([
        'fname' => $request->fname,
        'lname' => $request->lname,
        'poste' => $request->poste,
        'salaire' => $request->salaire,
        'email' => $request->email,
        'password' => Hash::make($request->password),
      ]);
      return redirect('dashboard');
    }
  }

  public function userTaches()
  {
    $user_id = auth()->user()->id;
    $taches = DB::table('travailles')
      ->join('taches', 'travailles.tache_id', '=', 'taches.id')
      ->join('projets', 'projets.id', '=', 'taches.projet_id')
      ->where('travailles.user_id', '=', 2)->get();
      
    return view('employe', compact('taches'));
  }
}
