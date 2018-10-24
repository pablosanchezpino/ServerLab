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
        @foreach ($robots as $robot)
        <div class="col-sm-12 col-md-4">
            <div class="card mt-2 mb-2">
                <img class="card-img-top" src="img/mbot.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Nombre: {{$robot->name}}</h5>
                <p>Número de serie: {{$robot->nro_serie}}</p>
                <a href="robot/{{$robot->id}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                <a href="deleteRobot/{{$robot->id}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection

