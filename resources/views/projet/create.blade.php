@extends('layouts.master')

@section('dashboard')
    Ajouter Projet
@stop

@section('home')
    Projets
@stop

@section('homeTitle')
    Add new projet
@stop

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('projets.store') }}">
            @csrf
            Intutile : <input type="text" class="form-control" name="intitule">
            <br />
            Lieu: <input type="text" class="form-control" name="lieu">
            <br />
            <button type="submit" class="btn btn-outline-primary">Ajouter</button>
        </form>
    </div>
@stop
