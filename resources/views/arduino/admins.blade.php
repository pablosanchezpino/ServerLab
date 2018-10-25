@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}">Home</a>
      </li>
      <li class="breadcrumb-item active">{{ config('app.name', 'Laravel') }}</li>
    </ol>
    @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
    @endif
    <div class="row">
        @foreach ($users as $user)
        <div class="col-sm-12 col-md-4">
            <div class="card mt-2 mb-2">
                <img class="img-logo-user" src="img/admin-logo.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Nombre: {{$user->name.' '.$user->last_name}}</h5>
                <p>
                    Email: {{$user->email}} <br>
                    Rol: {{$user->role}}
                </p>
                <a href="admin/{{$user->id}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                <a href="deleteAdmin/{{$user->id}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection

