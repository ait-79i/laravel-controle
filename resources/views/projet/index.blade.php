@extends('layouts.master')


@section('dashboard')
    Projets
@stop

@section('home')
    All
@stop

@section('homeTitle')
    list
@stop

@section('content')
    <div class="container-fluid">
        <table class="table table-hover">
            <tr>
                <th>Num_projet</th>
                <th>Intitule</th>
                <th>Lieu</th>
                <th>list Tache</th>
                <th>Ajouter tache</th>
            </tr>
            @foreach ($projets as $prj)
                <tr>
                    <td>{{ $prj->id }}</td>
                    <td>{{ $prj->intitule }}</td>
                    <td>{{ $prj->Lieu }}</td>

                    <td>
                        <button class="btn btn-outline-info">
                            <a href={{ route('projets.show', $prj) }} class="text-decoration-none text-dark">
                                <i class="uil uil-eye">show</i>
                            </a>
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-outline-success">
                            <a href="{{ route('taches.create', ['projetId' => $prj->id]) }}"
                                class="text-decoration-none text-dark">
                                Add
                            </a>
                        </button>

                    </td>

                </tr>
            @endforeach
        </table>
    </div>

@stop
