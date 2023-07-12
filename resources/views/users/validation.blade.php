@extends('layouts.dashboard')
@section('page-content')
    <div class="container-fluid mt-3" style="height: 100vh" >
        <div class="row " style="margin-top: 70px">
            <div class="col-lg-8 mx-auto ">
                <div class="card card-default card-md mb-4 ">
                    <div class="card-header" style="background-color:#fba407 ;text-align:center">
                        <h6 style="color: white">Les details de la permission</h6>
                    </div>
                    <div class="card-body pb-md-50">
                      <div >
                        <p><span style="font-weight: bold">Objet :</span> {{ $permission->objet }}</p>
                      </div>
                      <hr>
                      <div>
                        <p><span style="font-weight: bold">Motif :</span> {{ $permission->motif }}</p>
                      </div>
                      <hr>
                      <div>
                        <p><span style="font-weight: bold">Superviseur :</span> {{ $permission->superviseur }}</p>
                      </div>
                      <hr>
                      <div class="row">
                            <div class="col-4">
                                <p class="mb-2">Debut de la permission</p>
                                <p><span style="font-weight: bold">Date de debut :</span><br> {{ $permission->dateDepart }}</p>
                                <hr>
                                <p><span style="font-weight: bold">Heure de debut :</span> {{ $permission->heureDepart }}</p>
                            </div>
                            <div class="col-4 mx-auto">
                                <p class="mb-2">Fin de la permission</p>
                                <p><span style="font-weight: bold">Date de fin :</span><br> {{ $permission->dateFin }}</p>
                                <hr>
                                <p><span style="font-weight: bold">Heure de fin :</span> {{ $permission->heureFin }} </p>
                            </div>
                      </div>
                      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-4 mb-4">
                            <p style="padding: 15px; background-color:#fba407; color:white; border: #fba407 solid 1px; border-radius:5px">{{ $permission->statut }}</p>
                      </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
