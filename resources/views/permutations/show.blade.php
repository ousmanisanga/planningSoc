@extends('layouts.dashboard')
@section('page-content')
    <div class="container-fluid mt-3" style="height: 100vh">
        <div class="row" style="display: flex">
            @foreach ( $permutations as $key=>$permutation  )
                <div class="col-lg-6 d-grid gap-2 d-sm-flex ">

                    <div class="card mt-4" style="border: white solid 2px; box-shadow: 13px 22px 15px -3px rgba(0,0,0,0.1);">
                        <div class="card-body" >
                            <h4 class="card-header" style="color:white; background-color: #fba407;"> Permutation numero: {{ $key }}</h4>

                            <p class="card-text">Vous avez effectuer une demande de permutation pour la supervision du  : {{ $permutation->datePermutation  }} </p>
                            <p class="mt-3"><small style="color: blue">{{ $permutation->created_at->diffForHumans() }}</small></p>

                            <button type="button" class="btn btn-outline-warning btn-lg px-4" style="float: right; box-shadow: 11px 19px 15px -3px rgba(0,0,0,0.1);"><a class="dropdown-item" href="{{ route('permutations.detail', $permutation->id) }}">
                                {{ __('Detail') }}
                            </a></button>


                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>
@endsection
