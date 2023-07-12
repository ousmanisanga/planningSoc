@extends('layouts.dashboard')
@section('page-content')
    <div class="container-fluid mt-3" style="height: 100vh">
        <div class="row">
            <div class="col-lg-2 mb-20  mr-3  cadre" style="height: 15em; background-color:#fff; border-radius:8px; border:#fff solid 1px; box-shadow: 16px 17px 15px -3px rgba(0,0,0,0.1);">
                <div class="mt-4 mx-auto" style="padding: 5px; background:#fba407  ;border-radius:50px; display: flex; align-items: center;">

                    <x-iconpark-permissions  style="color: #fff; height: 24px; width: 29px" />
                    <span style="color: #fff; font-size: 16px; "> Total</span>
                </div>
                <div class="mt-4 mx-4">
                    <span style="font-weight: bold; font-size:20px">{{ $permissionCount }}</span>  <br><span style="font-family: 'Poppins', sans-serif; font-size:14px">Nombre de permissions total</span>

                </div>
            </div>
            <div class="col-lg-3 mb-20  mr-3  cadre" style="height: 15em; background-color:#fff; border-radius:8px; border:#fff solid 1px;box-shadow: 16px 17px 15px -3px rgba(0,0,0,0.1);">
                <div class="mt-4 mx-auto" style="padding: 5px; background:#4169E1 ;border-radius:50px; display: flex; align-items: center;">

                    <x-iconpark-permissions style="color: #fff; height: 24px; width: 29px" />
                    <span style="color: #fff; font-size: 16px;  ">Permission en attente</span>

                </div>
                <div class="mt-4 mx-4">
                   <span style="font-weight: bold; font-size:20px">{{ $permissiontsCount }}</span>  <br><span style="font-family: 'Poppins', sans-serif; font-size:16px">Nombre de permissions en attente</span>

                </div>
            </div>
            <div class="col-lg-3 mb-20  mr-3  cadre" style="height: 15em; background-color:#fff; border-radius:8px; border:#fff solid 1px; box-shadow: 16px 17px 15px -3px rgba(0,0,0,0.1);">

                <div class="mt-4 mx-auto" style="padding: 5px; background: #ff8333;border-radius:50px; display: flex; align-items: center;">

                    <x-iconpark-permissions style="color: #fff; height: 24px; width: 29px" />
                    <span style="color: #fff; font-size: 16px;"> Permission acceptée</span>

                </div>
                <div class="mt-4 mx-4">
                    <span style="font-weight: bold; font-size:20px">{{ $permissionsCount }}</span>  <br><span style="font-family: 'Poppins', sans-serif; font-size:16px">Nombre de permutations acceptée</span>

                </div>

            </div>
            <div class="col-lg-3 mb-20 cadre " style="height: 15em; background-color:#fff; border-radius:8px; border:#fff solid 1px; box-shadow: 16px 17px 15px -3px rgba(0,0,0,0.1);">

                <div class="mt-4 mx-auto" style="padding: 5px; background:#730800;border-radius:50px; display: flex; align-items: center;">

                    <x-iconpark-permissions style="color: #fff; height: 24px; width: 29px" />
                    <span style="color: #fff; font-size: 16px; ">Permutation refusée </span>
                </div>
                <div class="mt-4 mx-4">
                    <span style="font-weight: bold; font-size:20px"> {{  $permissiontCount }}</span>  <br><span style="font-family: 'Poppins', sans-serif; font-size:16px">Nombre de permutations refusée</span>

                </div>


            </div>
        </div>
        <div class="row mt-4 py-1 ">
            <div class="col-lg-6  " style="margin-right: 7em"  >
                <h4 class="py-1">Liste des demandes de permissions </h4>
                <hr>
            </div>

            <div class="col-lg-4">

                <form action="/" class="d-flex align-items-center user-member__form my-sm-0  "  >
                    <span data-feather="search"></span>
                    <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Rechercher par nom" aria-label="Search">
                </form>


            </div>


        </div>
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="card" style="border: #fff solid 1px">
                    <div class="card-body">

                        <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th>
                                                <span class="projectDatatable-title" style="color: white; font-weight: bold;" >No</span>
                                            </th>
                                            <th>
                                                <span class="projectDatatable-title" style="color: white; font-weight: bold;" >Superviseur</span>
                                            </th>
                                            <th>
                                                <span class="projectDatatable-title" style="color: white; font-weight: bold;" >Objet</span>
                                            </th>
                                            <th>
                                                <span class="projectDatatable-title" style="color: white; font-weight: bold;" >Debut de la permission</span>
                                            </th>
                                            <th>
                                                <span class="projectDatatable-title" style="color: white; font-weight: bold;" >Fin de la permission</span>
                                            </th>
                                            <th style="text-align: center">
                                                <span class="projectDatatable-title" style="color: white; font-weight: bold;" >Action</span>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($permissions as $key=>$permission )
                                            <tr>
                                                <td>
                                                    <div class="userDatatable-content" style="text-align: center">
                                                        {{ ++$key }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                    {{ $permission->users->nom }} {{ $permission->users->prenom }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $permission->objet }}
                                                    </div>
                                                </td>
                                                <td>


                                                    <div class="userDatatable-content">
                                                        {{ $permission->dateDepart }}
                                                    </div>

                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $permission->dateFin }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        @if ($permission->statut == 'en attente')
                                                            <form method="POST" action="{{ url('permissions/'. $permission->id) }}">
                                                                @csrf
                                                                @method('PATCH')
                                                                <a class="btn " href="{{ url('demande/'. $permission->id) }}" style="background-color: #4169E1; color: #fff">Voir</a>
                                                                <button type="submit" name="statut" value="accepté"  class="btn btn" style="background-color: #ff8333; color:#fff">Accepter</button>
                                                                <button type="submit" name="statut" value="refusé" class="btn btn-danger" style="background-color: red">Refuser</button>

                                                            </form>
                                                        @else
                                                            {{ $permission->statut }}

                                                        @endif
                                                    </div>
                                                </td>

                                            </tr>

                                        @endforeach
                                    </tbody>
                                </table><!-- End: .table -->
                            </div>
                        </div><!-- End: .userDatatable -->

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
