<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header " >
            <h5 class="modal-title" id="exampleModalLabel"> Confirmation de la demande</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p> voulez vous vraiment envoyer la demande ?</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
            <button type="submit" class="btn btn-warning" id="modalSubmitButton" style="color: white">Confirmer</button>
            </div>
        </div>
    </div>
</div>

@extends('layouts.dashboard')
@section('page-content')
    <div class="container-fluid mt-3" style="height:100vh;">
        @if ($errors->any())
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default card-md mb-2">
                                <div class="card-header py-3" style="background-color: #fba407">
                                    <span><i class="fa fa-exclamation-triangle" aria-hidden="true" style="color: #ffff"></i></span>
                                    <h4 style="color: #ffff">Message d'erreur</h4>
                                </div>
                                <div class="card-body">
                                    <div class=" alert alert-success " role="alert">
                                        <div class="alert-content">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="row mt-3">
            <div class="col-md-6 offset-md-3 text-center py-2 mb-4" style="background-color: #fba407; border-radius:5px; color:white; font-size:16px; font-weight:bold">Fiche de demande de permutation</div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card py-10" style="border: white solid 1px; ">
                    <p style="margin-left: 13px"><span>1-</span> Bienvenue sur le formulaire de demande de permutation,veuillez remplir tous les champs ci-possible !!! </p>
                    <p style="margin-left: 13px"><span>2-</span> Les champs avec * sont obligatoire et doivent être renseigner!!! </p>
                    <p style="margin-left: 13px"><span>3-</span> Après avoir renseigner le formulaire, cliquez sur le bouton "Envoyer" pour terminer </p>
                </div>
            </div>
        </div>
     {{-- form section --}}
        <div class="form-element mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-default card-md mb-4">
                        <div class="card-header" style="background-color: white">
                            <h6 style="color: #fba407">Formulaire de demande de permutation</h6>
                        </div>
                        <div class="card-body pb-md-50">
                            <form action="{{ route('permutations.store') }}" method="POST" id="myForm">
                                @csrf
                                <div class="form-row mx-n15">
                                    <div class="col-md-4 mb-20 px-15">
                                        <label for="objet" class="il-gray fs-14 fw-500 align-center">Objet *</label>
                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light" id="objet" placeholder=" L'objet de la demande" name="objet" required>
                                    </div>
                                    <div class="col-md-4 mb-20 px-15">
                                        <label for="motif" class="il-gray fs-14 fw-500 align-center">Motif *</label>
                                        <textarea class="form-control  ih-medium ip-light radius-xs b-light" name="motif" id="motif" cols="30" rows="10" placeholder="Le motif de la demande" required></textarea>
                                    </div>
                                    <div class="col-md-4 mb-20 px-15">
                                        <label for="superviseur" class="il-gray fs-14 fw-500 align-center">Superviseur</label>
                                        <input type="text" class="form-control  ih-medium ip-light radius-xs b-light" id="superviseur" name="superviseur"  required value="{{ auth()->user()->nomUtilisateur }}">
                                    </div>

                                </div>
                                <div class="form-row mx-n15">
                                    <div class="col-md-4 mb-20 px-15">
                                        <label for="datePermutation" class="il-gray fs-14 fw-500 align-center mt-3">Date de debut *</label>
                                        <input type="date" class="form-control  ih-medium ip-light radius-xs b-light" id="datePermutation" name="datePermutation" placeholder="" required>
                                    </div>
                                    <div class="col-md-4 mb-20 px-15">
                                        <label for="heureDebut" class="il-gray fs-14 fw-500 align-center mt-3">Heure de debut *</label>
                                        <input type="time" class="form-control  ih-medium ip-light radius-xs b-light" id="heureDebut" name="heureDebut" placeholder="00:00 " required>
                                    </div>
                                    <div class="col-md-4 mb-20 px-15">
                                        <label for="heureFin" class="il-gray fs-14 fw-500 align-center mt-3">Heure de fin *</label>
                                        <input type="time" class="form-control  ih-medium ip-light radius-xs b-light" id="heureFin" name="heureFin" placeholder="00:00" required>
                                    </div>

                                </div>



                                <div class="form-row mx-n15">

                                    <div class="col-md-4  mb-20 px-15">
                                        <label for="superviseurRemplacant" class="il-gray fs-14 fw-500 align-center mt-3">Nom du remplaçant *</label>
                                        <input type="text" class="form-control  ih-medium ip-light radius-xs b-light" id="superviseurRemplacant" name="superviseurRemplacant" placeholder="Nom du Remplaçant" required>
                                    </div>

                                </div>

                                <div class="form-row mx-n15" style="visibility: hidden"   >
                                    <label for="user_id"> ID</label>
                                    <input type="text" id="user_id" name="user_id" value="{{ auth()->user()->id }}" >
                                </div>


                                <button class="btn  px-30" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #fba407; color:white">Envoyer</button>
                            </form>
                        </div>
                    </div>
                    <!-- ends: .card -->
                </div>
            </div>
        </div>
     {{-- end form section --}}




    </div>

    <script>
        document.getElementById('modalSubmitButton').addEventListener('click', function() {
            document.getElementById('myForm').submit();
        });

        document.getElementById('modalCancelButton').addEventListener('click', function() {
            // Fermer le modal
            var modal = bootstrap.Modal.getInstance(document.getElementById('staticBackdrop'));
            modal.hide();
        });
    </script>
@endsection
