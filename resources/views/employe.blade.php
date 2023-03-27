@extends('layouts.master')


@section('dashboard')
    hello , {{ auth()->user()->fname }}
@stop

@section('home')
@stop

@section('homeTitle')
@stop

@section('content')

    <div class="container-fluid">
        <table class="table table-hover">
            <tr>
                <th>projet</th>
                <th>nom_tache</th>
                <th>Nombre d'heure de travaille</th>

            </tr>
            @foreach ($taches as $tache)
                @php
                    $startDate = \Carbon\Carbon::parse($tache->date_debut);
                    $endDate = \Carbon\Carbon::parse($tache->date_fin);
                    $diff = $startDate->diffInDays($endDate);

                @endphp
                <tr>
                    <td>{{ $tache->intitule }}</td>
                    <td>{{ $tache->nom_tache }}</td>
                    <td>{{ $diff*8 }} h</td>

                </tr>
            @endforeach
        </table>

    </div>
@stop
