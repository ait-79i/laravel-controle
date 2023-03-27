@extends('layouts.master')


@section('dashboard')
    ADD tache {{ $projetId }}
@stop

@section('home')
    Taches
@stop

@section('homeTitle')
    Add
@stop

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('taches.store', ['projetId' => $projetId]) }}">
            @csrf
            Nom : <input type="text" class="form-control" name="nom">
            <br><br>
            Date Debut : <input type="date" class="form-control" name="date_debut">
            <br><br>
            Date Fin : <input type="date" class="form-control" name="date_fin">
            <br><br>
            Cout : <input type="text" class="form-control" name="cout">
            <br><br>
            <label for="">Employes</label>
            <select multiple name="employes[]" class="form-control">
                @foreach ($employes as $employe)
                    <option value="{{ $employe->id }}">{{ $employe->fname }} {{ $employe->lname }}</option>
                @endforeach
            </select>
            <br />
            <button type="submit" class="btn btn-outline-primary">Add</button>
        </form>

    </div>
@stop
