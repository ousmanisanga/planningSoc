@extends('layouts.dashboard')

@section('page-content')
    <div class="container mt-5">

        <div class="container-fluid">
            <div class="social-dash-wrap">
                <div class="row">
                    <h1 class="mb-5 text-center " >Modification des informations</h1>

                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>

                    @endif

                    <form method="POST" action="{{ route('updatePassword', ['userId' => auth()->id()]) }}">
                        @method('PATCH')
                        @csrf


                        <div class="form-group">
                            <label for="nomUtilisateur" style="margin-right: 15px;" >Identifiant</label>
                            <input id="nomUtilisateur" type="text" name="nomUtilisateur" value="{{ $user->nomUtilisateur }}" style="padding-left: 10px;padding-right:10px; border-radius: 5px; box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);">
                        </div>
                        <div class="form-group">
                            <label for="old_password" style="margin-right: 15px;" >Ancien mot de passe</label>
                            <input id="old_password" type="password" name="old_password" required autofocus  style="padding-left: 10px;padding-right:10px; border-radius: 5px; box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);">
                        </div>

                        <div class="form-group">
                            <label for="new_password" style="margin-right: 15px;" >Nouveau mot de passe</label>
                            <input id="new_password" type="password" name="new_password" required style="padding-left: 10px;padding-right:10px; border-radius: 5px; box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);">
                        </div>

                        <div class="form-group">
                            <label for="confirm_password" style="margin-right: 15px;" >Confirmer le nouveau mot de passe</label>
                            <input id="confirm_password" type="password" name="confirm_password" required style="padding-left: 10px;padding-right:10px; border-radius: 5px; box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1); border:white solid 1px;">
                        </div>

                        <!-- Ajoutez ici les champs supplémentaires pour les autres informations à modifier -->

                        <button type="submit" class="btn " style="background-color: #fba407; color:white">Modifier</button>
                    </form>



                </div>

            </div>
        </div>







    </div>
@endsection
