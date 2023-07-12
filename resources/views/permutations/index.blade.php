

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

        <div class="row">
            <div class="col " >
                <div class="row">
                    <div class="col">
                        <div class="card card-default card-md mb-4" style="padding-bottom: 30px">
                            <div class="card-header d-flex " style="background-color: #fba407">
                                <h1 class="text-center" style="color: white"> Soumissions des demandes de permutations </h1>
                            </div>
                            <div class="card-body pb-10" >
                                <div class="reply-editor media">

                                    <!-- ends: .reply-editor__author -->
                                    <div class="row pb-5">
                                        <div class="col-6">
                                            <div class="my-3">
                                                <h5 class="text-center" style="padding-top: 15px" >Historiques et soummissions des demandes</h5>
                                                <p class="mb-4 mt-5">Ici vous pouvez effectuer toute vos demandes de permutations et consulter à tout instant votre historique de permutations.Une fois votre demandes de permutations sera effectué, elle sera soummis au manager SOC pour validation. </p>

                                                <div class="col-lg-4 mx-auto ">
                                                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center ">
                                                        <button type="button" class="btn btn-warning btn-lg px-4 gap-3"><a class="dropdown-item" href="{{ route('permutations.create') }}">
                                                          {{ __('Permutation') }}
                                                      </a></button>
                                                        <button type="button" class="btn btn-outline-secondary btn-lg px-4"><a class="dropdown-item" href="{{ route('permutations.show', ['id => $userId']) }}">
                                                          {{ __('Historique') }}
                                                      </a></button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 pb-5" style="background-color: #fba407">
                                            <div class="row">
                                              <div class=" d-grid gap-1 d-sm-flex justify-content-sm-center my-4 mx-auto" style="width: 75%">
                                                <div class="card mt-2" style="box-shadow: 62px 36px 15px -3px rgba(0,0,0,0.1);border: white solid 1px;">
                                                  <div class="card-body">
                                                    <h5 class="card-title text-center" style="margin-bottom: 25px">Critère de validation</h5>
                                                    <div class="mx-auto d-grid gap-1 d-sm-flex justify-content-sm-center">
                                                      <a class="navbar-brand pb-3" href="#"><img class="dark" src="{{ asset('images/logoElite.png') }}" alt="svg" style="width: 37px; height:35px"><span style=" font-family: 'Lora', serif; font-size:25px">SocElite</span></a>
                                                    </div>
                                                    <p class="card-text">
                                                      Veuillez prendre connaissance des différentes <span style="color: rgb(104, 104, 218)">conditions à remplir</span> avant de soumettre votre demande de permutation.
                                                    </p>
                                                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-2 mb-4">
                                                      <button type="button"   class="btn btn-primary mb-6" style="color:white"  data-bs-toggle="modal" data-bs-target="#exampleModal" >Voir <span><x-grommet-add /></span></button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- ends: .reply-editor__form -->
                                </div>
                                <!-- ends: .reply-editor -->
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <!-- ends: .col-12 -->
                </div>
            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>
@endsection
