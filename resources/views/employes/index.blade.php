@extends('adminlte::page')


@section('title')
List Of Employes
@endsection

@section('content_header')
<h1>List Of Employes </h1>
@endsection

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-10 mx-auto">
           <div class="cart-my-5">
            <div class="card-header">
                <div class="text-center font-weight-bold text-uppercase">
                    <h4>Employes</h4>
                </div>
            </div>
            <div class="card-body">
            <table id="myTable" class="table table-borderd table-stripped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fullname</th>
                        <th>Departement</th>
                        <th>Hired</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employes as $key => $employe)
                    <tr>
                        <td>{{$key+=1}}</td>
                        <td>{{$employe->fullname}}</td>
                        <td>{{$employe->depart}}</td>
                        <td>{{$employe->hire_date}}</td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="{{route('employes.show,$employe->registration_number)}}"
                            class="btn btn-sm btn-primary">
                            <i class="fas fa-eye"></i>  
                            </a>

                            <a href="{{route('employes.edit,$employe->registration_number)}}"
                            class="btn btn-sm btn-warning">
                            <i class="fas fa-eye"></i>  
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           </div>
           </div>
          
        </div>
    </div>
</div>
@endsection