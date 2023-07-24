@extends('adminlte::page')


@section('title')
Attestation de travail
@endsection

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <p class="lead">
                <b>{{$employe->fullname}}</b> Fonctionne dans l'espace numérique dans de departement de
            </p>
            <p class="lead">
                <b>{{$employe->depart}}</b>
            </p>
            <p class="lead">
                <b>{{$employe->depart}}</b>
            </p>
            <p class="lead">
            il demande des vacances à partir de <b>......................</b>
            </p>
            <p class="lead">
            jusqu'à <b>.......................</b>
            </p>
            <p class="m-5">
                ...................
                ...................
            </p>
           
        </div>
    </div>
</div>

@endsection