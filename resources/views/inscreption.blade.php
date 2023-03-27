@extends('layouts.master')


@section('dashboard')
    Inscription
@stop

@section('home')
@stop

@section('homeTitle')
@stop

@section('content')
    <div class="container-fluid col-10">
        <form method="POST" action="{{ route('inscription') }}">
            @csrf
            <!-- fName -->
            <div class="col">
                First name :
                <input type="text" class="form-control" placeholder="First name" name='fname' value="{{ old('fname') }}">
                <small style="color: red">
                    @error('fname')
                        {{ $message }}
                    @enderror
                </small>
            </div>

            <!-- LName -->

            <div class="col">
                Last name :
                <input type="text" class="form-control" name='lname' value="{{ old('lname') }}">
                <small style="color: red">
                    @error('lname')
                        {{ $message }}
                    @enderror
                </small>
            </div>

            <!-- poste -->
            <div class="col">
                Poste :
                <input type="text" class="form-control" name='poste' value="{{ old('poste') }}">
                <small style="color: red">
                    @error('poste')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <!-- salaire -->
            <div class="col">
                Salaire :
                <input type="text" class="form-control" name='salaire' value="{{ old('salaire') }}">
                <small style="color: red">
                    @error('salaire')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <!--  Address -->
            <div class="col">
                Email :
                <input type="text" class="form-control" name='email' value="{{ old('email') }}">
                <small style="color: red">
                    @error('email')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <!--  password -->
            <div class="col">
                Password :
                <input type="password" class="form-control" name='password' value="{{ old('password') }}">
                <small style="color: red">
                    @error('password')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <!--  confirm password -->
            <div class="col">
                Confirm Password :
                <input type="password" class="form-control" name='password_confirmation'
                    value="{{ old('password_confirmation') }}">
                <small style="color: red">
                    @error('password_confirmation')
                        {{ $message }}
                    @enderror
                </small>
            </div>


            <button type="submit" class="btn btn-outline-success mt-2">S'inscrire</button>



    </div>
    </form>
    </div>
@stop
