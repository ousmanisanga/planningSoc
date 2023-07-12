@extends('layouts.dashboard')
@section('page-content')
    <div class="container-fluid mt-3" style="height: 100vh">
        <div class="row" style="display: flex">
            @foreach ( $permissions as $key=>$permission  )
                <div class="col-lg-6 d-grid gap-2 d-sm-flex ">

                    <div class="card mt-4" style="border: white solid 2px; box-shadow: 13px 22px 15px -3px rgba(0,0,0,0.1);">
                        <div class="card-body" >
                            <h4 class="card-header" style="color:white; background-color: #fba407;"> Permission numero: {{ $key }}</h4>

                            <p class="card-text">Vous avez effectuer une demande de permission pour la période du  : {{ $permission->dateDepart  }} au {{ $permission->dateFin }} </p>
                            <p class="mt-3"><small style="color: blue">{{ $permission->created_at->diffForHumans() }}</small></p>

                            <button type="button" class="btn btn-outline-warning btn-lg px-4"><a class="dropdown-item" href="{{ route('permissions.detail', $permission->id) }}">
                                {{ __('Detail') }}
                            </a></button>


                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>
@endsection
