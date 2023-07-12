






@extends('layouts.dashboard')
@section('page-content')
    <div class="container-fluid mt-3" style="height: 100vh">

        {{-- success message --}}
        @if ($message = Session::get('success'))
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default card-md mb-4">
                                <div class="card-header py-20">
                                    <span><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>
                                    <h4>Success !!!</h4>
                                </div>
                                <div class="card-body">
                                    <div class=" alert alert-success " role="alert">
                                        <div class="alert-content">
                                            <p>{{ $message }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        {{-- end success message --}}
        <div class="row mt-4  mb-2 py-1 ">
            <div class="col-md-6  "   >
                <h4 >Liste des incidents declarés </h4>
                <hr>
            </div>
            <div class="col-md-2 "></div>
            <div class="col-md-4 d-flex justify-content-end " >

                <form action="/" class="d-flex align-items-center user-member__form my-sm-0  " >
                    <span data-feather="search"></span>
                    <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Rechercher par date" aria-label="Search">
                </form>
            </div>
        </div>



        <div class="row " style="margin-top:2em">
            <div class="col-lg-12">
                <div class="userDatatable global-shadow border p-30 bg-white radius-xl w-100 mb-30">
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                            <thead>
                                <tr class="userDatatable-header" >
                                    <th>

                                        <span class="userDatatable-title" style="color: white; font-weight: bold;" >No</span>
                                    </th>
                                    <th>

                                        <span class=" userDatatable-title" style="color: white; font-weight: bold;">Superviseur</span>

                                    </th>
                                    <th>
                                        <span class="userDatatable-title" style="color: white ; font-weight: bold;" >Date de l'incident</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title" style="color: white; font-weight: bold;" >Nom de l'incident </span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title" style="color: white; font-weight: bold;" >Heure de l'incident</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title" style="color: white; font-weight: bold;" >Observation</span>
                                    </th>

                                    <th class="text-center">
                                        <span class="userDatatable-title " style="color: white; font-weight: bold;" >Heure de retour </span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incidents as $key => $incident )
                                <tr class="mt-4 mb-2">
                                    <td>
                                        <div class="userDatatable-content">{{ ++$key }}</div>
                                    </td>
                                    <td>

                                        <div class="userDatatable-content">
                                            {{ $incident->users->nom }} {{ $incident->users->prenom }}
                                        </div>

                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            {{ $incident->dateIncident }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            {{ $incident->nomIncident }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            {{ $incident->heureIncident }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            {{ $incident->observation }}
                                        </div>
                                    </td>

                                    <td>
                                       <div class="userDatatable-content">

                                            @if($incident->heureRetourNormal == '')
                                                  <p>Heure de retour au normal en attente.</p>
                                            @else
                                                {{ $incident->heureRetourNormal }}

                                            @endif
                                       </div>
                                    </td>
                                </tr>



                                @endforeach


                            </tbody>
                        </table>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #fba407">
                                <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #fff">Declaration d'incidents</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: #fff"></button>
                                </div>
                                <form action="{{ route('incidents.store') }}" method="POST" >
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-row mx-n15">
                                            <div class="col-md-9 mb-20 px-15">
                                                <label for="nomIncident" class="il-gray fs-14 fw-500 align-center">Nom de l'incident *</label>
                                                <input type="text" class="form-control ih-medium ip-light radius-xs b-light" id="nomIncident" placeholder="Le nom de l'incident" name="nomIncident" required>
                                            </div>
                                        </div>
                                        <div class="form-row mx-n15">
                                            <div class="col-md-9 mb-20 px-15">
                                                <label for="dateIncident" class="il-gray fs-14 fw-500 align-center">Date de l'incident *</label>
                                                <input type="date" class="form-control  ih-medium ip-light radius-xs b-light" id="dateIncident" name="dateIncident" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-row mx-n15">
                                            <div class="col-md-6 mb-20 px-15">
                                                <label for="heureIncident" class="il-gray fs-14 fw-500 align-center">Heure de l'incident *</label>
                                                <input type="time" class="form-control  ih-medium ip-light radius-xs b-light" id="heureIncident" name="heureIncident" placeholder="" required>
                                            </div>
                                            <div class="col-md-6 mb-20 px-15" >
                                                <label for="heureRetourNormal" class="il-gray fs-14 fw-500 align-center ">Heure de retour au normal</label>
                                                <input type="time" class="form-control  ih-medium ip-light radius-xs b-light" id="heureRetourNormal" name="heureRetourNormal" placeholder="00:00" >
                                            </div>
                                        </div>
                                        <div class="form-row mx-n15">
                                            <div class="col-md-9 mb-20 px-15">
                                                <label for="observation" class="il-gray fs-14 fw-500 align-center">Observation *</label>
                                                <textarea class="form-control  ih-medium ip-light radius-xs b-light" name="observation" id="observation" cols="30" rows="10" placeholder="observation..." required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row mx-n15" {{--style="visibility: hidden"  --}} >
                                            <input type="text" id="user_id" name="user_id" value="{{ auth()->user()->id }}" hidden>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                        <button type="submit" class="btn btn-primary">Declarer</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>






                </div>
            </div>
        </div>
    </div>




@endsection
