@extends('adminlte::page')


@section('title')
Les données d'Employés
@endsection

@section('content_header')
<h1>Les données d'Employés </h1>
@endsection

@section('content')

<div class="container">
 @include('layouts.alert')
    <div class="row ">
        <div class="col-md-8 mx-auto">
           <div class="cart-my-5">
             <div class="card-header">
                <div class="text-center font-weight-bold text-uppercase">
                    <h3>{{$employe->fullname}}</h3>
                </div>
            </div>

            <div class="mt-3 text-center font-weight-bold text-uppercase">
                <a href="{{route('vacation.request',$employe->registration_number)}}" class="btn btn-outline-dark">Demande de Congé </a>
                <a href="{{route('certificate.request',$employe->registration_number)}}" class="btn btn-outline-danger">Attestation de travail </a>
            </div>
            <hr>
            

           <div class="card-body">
            <form action="{{route('employes.store')}}"
               method="POST" class="mt-3" >
                @csrf
                <div class="form-group mb-3">
                    <label for="register_number"> Numéro de Matricule </label>
                    <input type="text" disabled class="form-control rounded-0" name="registration_number"  placeholder="Numéro de Matricule" maxlength="8" value="{{$employe->registration_number}}">
                </div>
                <div class="form-group mb-3" require>
                    <label for="fullname">Nom et Prenom </label>
                    <input type="text" disabled class="form-control rounded-0" name="fullname"  placeholder="Nom et Prenom " value="{{$employe->fullname}}">
                </div>
               
                <div class="form-group mb-3">
                    <label for="depart"> Departement </label>
                    <input type="text" disabled class="form-control rounded-0" name="depart"  placeholder="Departement" value="{{$employe->depart}}">
                </div>

                <div class="form-group mb-3">
                    <label for="hire_date"> Date de naissance </label>
                    <input type="date" disabled class="form-control rounded-0" name="hire_date"  placeholder="Date de naissance" value="{{$employe->hire_date}}">
                </div>

                <div class="form-group mb-3">
                    <label for="phone"> Numéro de Telephone </label>
                    <input type="phone" disabled class="form-control rounded-0" name="phone"  placeholder="Numéro de Telephone" value="{{$employe->phone}}">
                </div>

                <div class="form-group mb-3">
                    <label for="address"> Address </label>
                    <input type="text" disabled class="form-control rounded-0" name="address"  placeholder="Address" value="{{$employe->address}}">
                </div>

                <div class="form-group mb-3">
                    <label for="city"> Ville </label>
                    <input type="text" disabled class="form-control rounded-0" name="city"  placeholder="Ville" value="{{$employe->city}}">
                </div>
               
            </form>
           </div>
           </div>
          
        </div>
    </div>
</div>
@endsection
