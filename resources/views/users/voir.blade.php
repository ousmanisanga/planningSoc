@extends('layouts.dashboard')
@section('page-content')
    <div class="container-fluid mt-3" style="height: 100vh" >
        <div class="row " style="margin-top: 70px">
            <div class="col-lg-8 mx-auto ">
                <div class="card card-default card-md mb-4 ">
                    <div class="card-header" style="background-color:#fba407 ;text-align:center">
                        <h6 style="color: white">Les details de la permutations</h6>
                    </div>
                    <div class="card-body pb-md-50">
                      <div style="margin-left: 15px">
                        <p><span style="font-weight: bold">Objet :</span> {{ $permutation->objet }}</p>
                      </div>
                      <hr>
                      <div style="margin-left: 15px">
                        <p><span style="font-weight: bold">Motif :</span> {{ $permutation->motif }}</p>
                      </div>
                      <hr>
                      <div style="margin-left: 15px">
                        <p><span style="font-weight: bold">Superviseur :</span> {{ $permutation->superviseur }}</p>
                      </div>
                      <hr>
                      <div style="margin-left: 15px">
                        <p><span style="font-weight: bold">Date de permutation :</span> {{ $permutation->datePermutation }}</p>
                      </div>
                      <hr>
                      <div style="margin-left: 15px">
                        <p><span style="font-weight: bold">Heure de debut :</span> {{ $permutation->heureDebut }}</p>
                      </div>
                      <hr>
                      <div style="margin-left: 15px">
                        <p><span style="font-weight: bold">Heure de fin :</span> {{ $permutation->heureFin }} </p>
                      </div>
                      <hr>
                      <div style="margin-left: 15px">
                        <p><span style="font-weight: bold">Superviseur Remplaçant :</span> {{ $permutation->superviseurRemplacant }} </p>
                      </div>
                      <hr>
                      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-4 mb-4">
                            <p style="padding: 15px; background-color:#fba407; color:white; border: #fba407 solid 1px; border-radius:5px">{{ $permutation->statut }}</p>
                      </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


