@extends('adminlte::page')


@section('title')
Modifier les données des employés
@endsection

@section('content_header')
<h1>Modifier les données des employés </h1>
@endsection

@section('content')
<div class="container">
    @include('layouts.alert')
    <div class="row ">
        <div class="col-md-8 mx-auto">
           <div class="cart-my-5">
             <div class="card-header">
                <div class="text-center font-weight-bold text-uppercase">
                    <h4>Modifier les données des employés</h4>
                </div>
             </div>
           <div class="card-body">
            <form action="{{route('employes.update',$employe->registration_number)}}"
               method="POST" class="mt-3" >
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="register_number"> Numéro de Matricule </label>
                    <input type="text" class="form-control" name="registration_number"  placeholder="Numéro de Matricule" value="{{old('registration_number',$employe->registration_number)}}">
                </div>
                <div class="form-group mb-3" require>
                    <label for="fullname">Nom et Prenom </label>
                    <input type="text" class="form-control" name="fullname"  placeholder="Nom et Prenom " value="{{old('fullname',$employe->fullname)}}">
                </div>
               
                <div class="form-group mb-3">
                    <label for="depart"> Departement </label>
                    <input type="text" class="form-control" name="depart"  placeholder="Departement" value="{{old('depart',$employe->depart)}}">
                </div>

                <div class="form-group mb-3">
                    <label for="hire_date"> Date de naissance </label>
                    <input type="date" class="form-control" name="hire_date"  placeholder="Date de naissance" value="{{old('hire_date',$employe->hire_date)}}">
                </div>

                <div class="form-group mb-3">
                    <label for="phone"> Numéro de Telephone </label>
                    <input type="phone" class="form-control" name="phone"  placeholder="Numéro de Telephone" value="{{old('phone',$employe->phone)}}">
                </div>

                <div class="form-group mb-3">
                    <label for="address"> Address </label>
                    <input type="text" class="form-control" name="address"  placeholder="Address" value="{{old('address',$employe->address)}}">
                </div>

                <div class="form-group mb-3">
                    <label for="city"> Ville </label>
                    <input type="text" class="form-control" name="city"  placeholder="Ville" value="{{old('city',$employe->city)}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                    Enregistrer
                    </button>
                </div>
            </form>
           </div>
           </div>
          
        </div>
    </div>
</div>
@endsection
