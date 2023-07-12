@if ($errors->any())

<div class="alert alert-danger">

    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>

</div>

@endif


@extends('layouts.dashboard')
@section('page-content')
    <div class="container-fluid mt-4" style="height: 100vh">
        <div class="row">
            <div class="col-lg-6 mx-auto" style="margin-top: 5em">
                <div class="card card-default card-md-4" style="border: #fff solid 1px ; box-shadow: 14px 19px 15px -3px rgba(0,0,0,0.1);" >
                    <div class="card-header" style="background:#fba407; color:#fff;"><h5>Actualisation du retour au normal</h5><hr></div>
                    <form action="{{ route('incidents.update', ['id' => $incident->id]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group mb-0">
                                <label for="heureRetourNormal">Heure de retour au normal *</label>
                                <input type="time" class="form-control form-control-lg" id="heureRetourNormal" name="heureRetourNormal" value="{{ $incident->heureRetourNormal }}">
                            </div>
                        </div>
                        <div class="modal-footer mb-2 ">
                            <a href="{{ route('incidents.index') }}" class="btn" style="background-color: #4fc031; color:#fff">Retour</a>
                            <button type="submit" class="btn mr-2" style="background: #fba407; color:#fff; margin-left:20px">Actualiser</button>
                        </div>

                    </form>



                </div>
            </div>
        </div>
    </div>
@endsection
