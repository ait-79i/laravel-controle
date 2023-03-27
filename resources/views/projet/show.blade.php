@extends('layouts.master')

@section('dashboard')
    Projet : {{ $projet->intitule }}
@stop

@section('home')
    {{ $projet->intitule }}
@stop

@section('homeTitle')
    taches
@stop

@section('content')

    @php
        $howlongs = 0;
    @endphp

    <div class="container-fluid">
        <table class="table table-hover">
            <tr>
                <th>nom_tache</th>
                <th>date_debut</th>
                <th>date_fin</th>
                <th>cout</th>
                <th>delete</th>
                <th>update</th>
            </tr>
            @foreach ($projet->taches as $tache)
                @php
                    $startDate = \Carbon\Carbon::parse($tache->date_debut);
                    $endDate = \Carbon\Carbon::parse($tache->date_fin);
                    $diff = $startDate->diffInDays($endDate);
                    $howlongs += $diff;
                @endphp
                <tr>
                    <td>{{ $tache->nom_tache }}</td>
                    <td>{{ $tache->date_debut }}</td>
                    <td>{{ $tache->date_fin }}</td>
                    <td>{{ $tache->cout }}</td>

                    <td>
                        <form method="POST" action="{{ route('taches.destroy', $tache) }}"
                            onsubmit="return confirm('Are you sure?')">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">
                                delete
                            </button>


                        </form>
                    </td>

                    <td>
                        <button class="btn btn-outline-success">
                            <a href={{ route('taches.edit', $tache) }} class="text-decoration-none text-dark">
                                update
                            </a>
                        </button>
                    </td>
                </tr>
            @endforeach
        </table>



        <div>
            <div>
                Cout Totale : {{ DB::table('taches')->where('projet_id', '=', $projet->id)->sum('cout') }} dh
            </div>
            <div>
                Dure Totale : {{ $howlongs }} day
            </div>
        </div>

    </div>
@stop
