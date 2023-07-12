<!-- Modal -->
<div class="modal fade " id="new-member"  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content  radius-xl">
            <div class="modal-header" style="background-color: rgba(246,138,12,.83); color:white">
                <h6 class="modal-title fw-500" id="staticBackdropLabel" style="color: white">Création d'un nouvel utilisateur</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: white;  border-radius: 50px;">
                    <span data-feather="x"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="new-member-modal">
                    <form method="POST" action="{{ url('users') }}">
                        @csrf
                        @method("POST")
                        <div class="form-group row mb-n25">
                            <div class="col-md-6 mb-25">
                                <label for="nom">Nom</label><br>
                                <div class="with-icon">

                                    <span class=" color-light"><x-bx-user style="height: 18px"/></span>
                                    <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" name="nom" id="inputNameIcon" placeholder="Nom">
                                </div>
                            </div>
                            <div class="col-md-6 mb-25">
                                <label for="prenom">Prenom</label><br>
                                <div class="with-icon">

                                    <span class="color-light"><x-bx-user style="height: 18px" /></span>
                                    <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" name="prenom" id="inputNameIcon" placeholder="Prenom">
                                </div>
                            </div>
                            <div class="col-md-6 mb-25">
                                <label for="email">Email</label><br/>
                                <div class="with-icon">

                                    <span class="color-light"">{{-- <x-emblem-email style="height: 18px" /> --}}</span>
                                    <input type="email" class="form-control  ih-medium ip-lightradius-xs b-light" name="email" id="inputNameIcon" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6 mb-25">
                                <label for="telephone">Téléphone</label><br>
                                <div class="with-icon">

                                    <span class="color-light">{{--  <x-heroicon-o-phone  style="height: 18px"/>--}}</span>
                                    <input type="number" class="form-control  ih-medium ip-lightradius-xs b-light" name="telephone" id="inputNameIcon" placeholder="Téléphone">
                                </div>
                            </div>
                            <div class="col-md-6 mb-25">
                                <label for="statut">Statut</label><br>
                                <div class="with-icon">

                                    <span class="color-light"> {{-- <x-polaris-major-jobs style="height: 18px"/> --}}</span>
                                    <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" name="statut" id="inputNameIcon" placeholder="Statut">
                                </div>
                            </div>
                            <div class="col-md-6 mb-25">
                                <label for="role">Role</label><br>
                                <div class="with-icon">

                                    <span class="color-light">{{--<x-gmdi-admin-panel-settings-o style="height: 18px" />--}}</span>
                                    <input type="number" class="form-control  ih-medium ip-lightradius-xs b-light" name="role" id="inputNameIcon" placeholder="Role">
                                </div>
                            </div>
                            <div class="col-md-6 mb-25">
                                <label for="nomUtilisateur">Identifiant</label><br>
                                <div class="with-icon">

                                    <span class="color-light">{{-- <x-bx-user-circle style="height: 18px" /> --}}</span>
                                    <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" name="nomUtilisateur" id="inputNameIcon" placeholder="Identifiant">
                                </div>
                            </div>
                            <div class="col-md-6 mb-25">
                                <label for="password">Mot de passe</label><br>
                                <div class="with-icon">

                                    <span class="color-light">{{-- <x-tni-password-o style="height:18px"/> --}}</span>
                                    <input type="password" class="form-control  ih-medium ip-lightradius-xs b-light" name="password" id="inputNameIcon" placeholder="mot de passe">
                                </div>
                            </div>
                        </div>






                        <div class="button-group d-flex pt-25">

                            <button class="btn  btn-default btn-squared text-capitalize" type="submit" style="background-color: #fba407; color:white">Ajouter
                            </button>

                            <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">Annuler
                            </button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->





@extends('layouts.dashboard')

@section('page-content')


        <div class="container-fluid mt-3" style="height:100vh;">
                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>

                    @endif

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

                    <div class="row">
                        <div class="col-lg-12">

                            <div class="breadcrumb-main user-member justify-content-sm-between ">
                                <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                                    <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                                        <h4 class="text-capitalize fw-500 breadcrumb-title">Les utilisateurs</h4>
                                        <span class="sub-title ml-sm-25 pl-sm-25">{{ $userCount }} utilisateurs</span>
                                    </div>

                                    <form action="/" class="d-flex align-items-center user-member__form my-sm-0  " >
                                        <span data-feather="search"></span>
                                        <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Rechercher par nom" aria-label="Search">
                                    </form>

                                </div>
                                <div class="action-btn">
                                    <a href="#" class="btn px-15  " data-toggle="modal" data-target="#new-member" style="background-color: #fba407 ; color:white; margin-left:5px; box-shadow: 11px 19px 15px -3px rgba(0,0,0,0.1);" >
                                    <span><x-grommet-add /></span>Ajouter Compte</a>




                                </div>
                            </div>

                        </div>
                    </div>



                    {{--  users tables --}}
                    <div class="row">
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

                                                    <span class=" userDatatable-title" style="color: white; font-weight: bold;">Utilisateur</span>

                                                </th>
                                                <th>
                                                    <span class="userDatatable-title" style="color: white ; font-weight: bold;" >Emaill</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title" style="color: white; font-weight: bold;" >Statut</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title" style="color: white; font-weight: bold;" >Role</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title" style="color: white; font-weight: bold;" >Téléphone</span>
                                                </th>

                                                <th class="text-center">
                                                    <span class="userDatatable-title " style="color: white; font-weight: bold;" >Action</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $key => $user )
                                            <tr>
                                                <td>
                                                    <div class="userDatatable-content">{{ ++$key }}</div>
                                                </td>
                                                <td>

                                                    <div class="userDatatable-content">
                                                        {{ $user->nom }} {{ $user->prenom }}
                                                    </div>

                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $user->email }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $user->statut }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $user->role }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $user->telephone }}
                                                    </div>
                                                </td>

                                                <td>
                                                    <ul class="orderDatatable_actions mb-0 d-flex justify-content-start" >
                                                        <li style="display: inline" >
                                                            <button class="btn" type="button">
                                                                <a href="href="{{ url('users/'. $user->id) }}" class="  view " >
                                                                    <span data-feather="eye" style="color: #fba407"></span></a>
                                                            </button>
                                                        </li>
                                                        <li style="display: inline" >
                                                            <button class="btn editbtn" type="button" data-toggle="modal" data-target="#modalCart"value="{{ $user->id }}" >
                                                                <a href="#" class="edit">
                                                                    <span data-feather="edit"></span></a>
                                                            </button>

                                                        </li>
                                                        <li style="display: inline">
                                                            <button class="btn" type="button" data-toggle="modal" data-target="#modalConfirmDelete">
                                                                <a href="#" class="remove">
                                                                    <span data-feather="trash-2" style="color: red"></span></a>
                                                            </button>

                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>



                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>

                                <div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true" >
                                    <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
                                        <!--Content-->
                                        <div class="modal-content text-center">
                                            <!--Header-->
                                            <div class="modal-header d-flex justify-content-center" style="background-color: red">
                                                <p class="heading" style="color: white">Êtes vous sur ?</p>
                                            </div>

                                            <!--Body-->
                                            <div class="modal-body">

                                                <i class="fas fa-times fa-4x animated rotateIn " style="color: red"></i>

                                            </div>

                                            <!--Footer-->
                                            <form action="{{ url('users/'. $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-footer flex-center">
                                                    <button class="btn " type="submit" style="background-color: #fba407; color: white">Oui</button>
                                                    <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal" style="color: white">Non</a>
                                                </div>
                                            </form>

                                        </div>
                                        <!--/.Content-->
                                    </div>
                                </div>
                                 <!--Modal: modalConfirmDelete-->

                                <!-- Modal: modalCart -->
                                    <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true" style="margin-top: 30px">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" >
                                                            <!--Header-->
                                                                    <div class="modal-header" style="background-color: #fba407">
                                                                            <h4 class="modal-title" id="myModalLabel" style="color: #ffff">Modification du compte</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                    </div>
                                                                        <!--Body-->
                                                                        <div class="modal-body">

                                                                            <form action="{{ url('users/'. $user->id) }}" method="Patch">
                                                                                @csrf
                                                                                @method('PATCH')
                                                                                <div class="form-group row mb-n25">
                                                                                    <div class="col-md-6 mb-25">
                                                                                        <label for="nom">Nom</label><br>
                                                                                        <div class="with-icon">
                                                                                            <span class="color-light"><x-bx-user style="height: 18px" /></span>


                                                                                            <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" name="nom" id="inputNameIcon" value="{{ $user->nom }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 mb-25">
                                                                                        <label for="prenom">Prenom</label><br>
                                                                                        <div class="with-icon">

                                                                                            <span class="color-light"><x-bx-user style="height: 18px" /></span>
                                                                                            <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" name="prenom" id="inputNameIcon" value="{{ $user->prenom }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 mb-25">
                                                                                        <label for="email">Email</label><br/>
                                                                                        <div class="with-icon">

                                                                                            <span class="color-light""><i class="fa fa-envelope-o" aria-hidden="true" style="height: 18px"></i>
                                                                                            </span>
                                                                                            <input type="email" class="form-control  ih-medium ip-lightradius-xs b-light" name="email" id="inputNameIcon" value="{{ $user->email }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 mb-25">
                                                                                        <label for="telephone">Téléphone</label><br>
                                                                                        <div class="with-icon">

                                                                                            <span class="color-light"><i class="fa fa-phone" aria-hidden="true"></i>
                                                                                            </span>
                                                                                            <input type="number" class="form-control  ih-medium ip-lightradius-xs b-light" name="telephone" id="inputNameIcon" value="{{ $user->telephone }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 mb-25">
                                                                                        <label for="statut">Statut</label><br>
                                                                                        <div class="with-icon">

                                                                                            <span class="color-light"> {{-- <x-polaris-major-jobs style="height: 18px"/> --}}</span>
                                                                                            <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" name="statut" id="inputNameIcon" value="{{ $user->statut }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 mb-25">
                                                                                        <label for="role">Role</label><br>
                                                                                        <div class="with-icon">

                                                                                            <span class="color-light">{{--<x-gmdi-admin-panel-settings-o style="height: 18px" />--}}</span>
                                                                                            <input type="number" class="form-control  ih-medium ip-lightradius-xs b-light" name="role" id="inputNameIcon" value="{{ $user->role }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                            </form>

                                                                        </div>
                                                                        <!--Footer-->
                                                                        <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-outline-primary" data-dismiss="modal">Modifier</button>
                                                                        <button class="btn btn-primary">Annuler</button>
                                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Modal: modalCart -->



                                <div class="d-flex justify-content-end pt-30">

                                    <nav class="atbd-page ">
                                        <ul class="atbd-pagination d-flex">
                                            <li class="atbd-pagination__item">
                                                <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                                <a href="#" class="atbd-pagination__link"><span class="page-number">1</span></a>
                                                <a href="#" class="atbd-pagination__link active"><span class="page-number">2</span></a>
                                                <a href="#" class="atbd-pagination__link"><span class="page-number">3</span></a>
                                                <a href="#" class="atbd-pagination__link pagination-control"><span class="page-number">...</span></a>
                                                <a href="#" class="atbd-pagination__link"><span class="page-number">12</span></a>
                                                <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                                <a href="#" class="atbd-pagination__option">
                                                </a>
                                            </li>
                                            <li class="atbd-pagination__item">
                                                <div class="paging-option">
                                                    <select name="page-number" class="page-selection">
                                                        <option value="20">20/page</option>
                                                        <option value="40">40/page</option>
                                                        <option value="60">60/page</option>
                                                    </select>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>


                                </div>
                            </div>
                        </div>
                    </div>








        </div>


@endsection
{{-- @section('scripts')
<script>
    $(document).ready(function(){
        $(document).on('click','.editbtn', () => {
            var user_id = $(this).val();
            $('#modalCart').modal('show')
        })
        $.ajax({
            url: "/users/"+user_id+"/edit",
            type:"GET",

            success: function (response) {
                console.log(response);
            }
        })
    })
</script>

@endsection --}}
