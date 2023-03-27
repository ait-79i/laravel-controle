@extends('layouts.master')


@section('dashboard')
    Update tache {{ $tache->projet_id }}
@stop

@section('home')
    Taches
@stop

@section('homeTitle')
    update
@stop

@section('content')
    <div class="container">
        <form action="{{ route('taches.update', $tache) }}" method="POST">
            @csrf
            @method('PUT')
            Nom : <input type="text" class="form-control" name="nom" value="{{ $tache->nom_tache }}">
            <br><br>
            Date Debut : <input type="date" class="form-control" name="date_debut" value="{{ $tache->date_debut }}">
            <br><br>
            Date Fin : <input type="date" class="form-control" name="date_fin" value="{{ $tache->date_fin }}">
            <br><br>
            Cout : <input type="text" class="form-control" name="cout" value="{{ $tache->cout }}">
            <br><br>
            {{-- Cout : <input type="hidden" class="form-control" name="projet_id" value="{{ $tache->projet_id }}">
            <br><br> --}}
            <label for="">Employes</label>
            <select multiple name="employes[]" class="form-control">
                @foreach ($employes as $employe)
                    <option value="{{ $employe->id }}">{{ $employe->fname }} {{ $employe->lname }}</option>
                @endforeach
            </select>
            <br />
            <button type="submit" class="btn btn-outline-primary">UPDATE</button>
        </form>

    </div>
@stop
