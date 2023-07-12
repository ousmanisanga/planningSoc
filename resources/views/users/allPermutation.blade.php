@extends('layouts.dashboard')
@section('page-content')
    <div class="container-fluid mt-3" style="height: 100vh">
        <div class="row">
            <div class="col-lg-2 mb-20  mr-3 " style="height: 15em; background-color:#fff; border-radius:8px; border:#fff solid 1px; box-shadow: 16px 17px 15px -3px rgba(0,0,0,0.1);">
                <div class="mt-4 mx-auto" style="padding: 5px; background:#fba407  ;border-radius:50px; display: flex; align-items: center;">

                    <x-gmdi-change-circle-r style="color: #fff; height: 24px; width: 29px" />
                    <span style="color: #fff; font-size: 16px; "> Total</span>
                </div>
                <div class="mt-4 mx-4">
                    <span style="font-weight: bold; font-size:20px">{{ $permutationCount }}</span>  <br><span style="font-family: 'Poppins', sans-serif; font-size:14px">Nombre de permutations total</span>

                </div>
            </div>
            <div class="col-lg-3 mb-20  mr-3 " style="height: 15em; background-color:#fff; border-radius:8px; border:#fff solid 1px;box-shadow: 16px 17px 15px -3px rgba(0,0,0,0.1);">
                <div class="mt-4 mx-auto" style="padding: 5px; background:#4169E1 ;border-radius:50px; display: flex; align-items: center;">

                    <x-gmdi-change-circle-r style="color: #fff; height: 24px; width: 29px" />
                    <span style="color: #fff; font-size: 16px;  ">Permutation en attente</span>

                </div>
                <div class="mt-4 mx-4">
                   <span style="font-weight: bold; font-size:20px">{{ $permutationtsCount }}</span>  <br><span style="font-family: 'Poppins', sans-serif; font-size:16px">Nombre de permutations en attente</span>

                </div>
            </div>
            <div class="col-lg-3 mb-20  mr-3 " style="height: 15em; background-color:#fff; border-radius:8px; border:#fff solid 1px; box-shadow: 16px 17px 15px -3px rgba(0,0,0,0.1);">

                <div class="mt-4 mx-auto" style="padding: 5px; background: #ff8333;border-radius:50px; display: flex; align-items: center;">

                    <x-gmdi-change-circle-r style="color: #fff; height: 24px; width: 29px" />
                    <span style="color: #fff; font-size: 16px;"> Permutation acceptée</span>

                </div>
                <div class="mt-4 mx-4">
                    <span style="font-weight: bold; font-size:20px">{{ $permutationsCount }}</span>  <br><span style="font-family: 'Poppins', sans-serif; font-size:16px">Nombre de permutations acceptée</span>

                </div>

            </div>
            <div class="col-lg-3 mb-20 " style="height: 15em; background-color:#fff; border-radius:8px; border:#fff solid 1px; box-shadow: 16px 17px 15px -3px rgba(0,0,0,0.1);">

                <div class="mt-4 mx-auto" style="padding: 5px; background:#730800;border-radius:50px; display: flex; align-items: center;">

                    <x-gmdi-change-circle-r style="color: #fff; height: 24px; width: 29px" />
                    <span style="color: #fff; font-size: 16px; ">Permutation refusée </span>
                </div>
                <div class="mt-4 mx-4">
                    <span style="font-weight: bold; font-size:20px"> {{  $permutationtCount }}</span>  <br><span style="font-family: 'Poppins', sans-serif; font-size:16px">Nombre de permutations refusée</span>

                </div>


            </div>
        </div>
        <div class="row mt-4 py-1 ">
            <div class="col-lg-6  " style="margin-right: 7em"  >
                <h4 class="py-1">Liste des demandes de permutations </h4>
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
                                                <span class="projectDatatable-title" style="color: white; font-weight: bold;" >Date de permutation</span>
                                            </th>
                                            <th>
                                                <span class="projectDatatable-title" style="color: white; font-weight: bold;" >Superviseur Remplaçant</span>
                                            </th>
                                            <th style="text-align: center">
                                                <span class="projectDatatable-title" style="color: white; font-weight: bold;" >Action</span>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($permutations as $key=>$permutation )
                                            <tr>
                                                <td>
                                                    <div class="userDatatable-content" style="text-align: center">
                                                        {{ ++$key }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                    {{ $permutation->users->nom }} {{ $permutation->users->prenom }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $permutation->objet }}
                                                    </div>
                                                </td>
                                                <td>


                                                    <div class="userDatatable-content">
                                                        {{ $permutation->datePermutation }}
                                                    </div>

                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $permutation->superviseurRemplacant }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        @if ($permutation->statut == 'en attente')
                                                            <form method="POST" action="{{ url('permutations/'. $permutation->id) }}">
                                                                @csrf
                                                                @method('PATCH')
                                                                <a class="btn " href="{{ url('arrangement/'. $permutation->id) }}" style="background-color: #4169E1; color: #fff">Voir</a>
                                                                <button type="submit" name="statut" value="accepté"  class="btn btn" style="background-color: #ff8333; color:#fff">Accepter</button>
                                                                <button type="submit" name="statut" value="refusé" class="btn btn-danger" style="background-color: red">Refuser</button>

                                                            </form>
                                                        @else
                                                            {{ $permutation->statut }}

                                                        @endif
                                                    </div>
                                                </td>

                                            </tr>

                                        @endforeach


                                        {{-- <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="userDatatable-inline-title">
                                                        <a href="#" class="text-dark fw-500">
                                                            <h6>Custom Software Development</h6>
                                                        </a>
                                                        <p class="pt-1 d-block mb-0">
                                                            Web Design
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    26 Dec 2019
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    18 Mar 2020
                                                </div>
                                            </td>
                                            <td>

                                                <ul class="d-flex user-group-people__parent align-content-center">
                                                    <li>
                                                        <a href="#"><img class="rounded-circle wh-34" src="img/tm1.png" alt="author"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img class="rounded-circle wh-34" src="img/tm2.png" alt="author"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img class="rounded-circle wh-34" src="img/tm3.png" alt="author"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img class="rounded-circle wh-34" src="img/tm4.png" alt="author"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img class="rounded-circle wh-34" src="img/tm6.png" alt="author"></a>
                                                    </li>
                                                    <li class="d-flex align-items-center ml-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                                </ul>


                                            </td>
                                            <td>

                                                <div class="d-inline-block">
                                                    <span class="media-badge color-white bg-secondary">on time</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="project-progress d-flex align-items-center">

                                                    <div class="user-group-progress-bar">

                                                        <div class="progress-wrap d-flex align-items-center mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>


                                                            <span class="progress-percentage">30%</span>


                                                        </div>

                                                        <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                                    </div>


                                                </div>
                                            </td>
                                            <td>
                                                <div class="project-progress text-right">


                                                    <div class="dropdown  dropdown-click ">

                                                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span data-feather=more-horizontal></span>
                                                        </button>


                                                        <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                                            <a class="dropdown-item" href="#">Item One</a>
                                                            <a class="dropdown-item" href="#">Item Two</a>
                                                            <a class="dropdown-item" href="#">Item Three</a>

                                                        </div>
                                                    </div>


                                                </div>
                                            </td>
                                        </tr> --}}

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
