@extends('layouts.app')
@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}">Home</a>
      </li>
      <li class="breadcrumb-item active">{{ config('app.name', 'Laravel') }}</li>
    </ol>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Robot') }}</div>
                <div class="card-body">
                <form method="POST" action="{{route('arduino.editRobot')}}">
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                        <input type="hidden" name="id" value="{{$robot->id}}" name="id">
                            <label for="nro_serie" class="col-md-4 col-form-label text-md-right">{{ __('Número de serie') }}</label>

                            <div class="col-md-6">
                                <input id="nro_serie" type="text" class="form-control{{ $errors->has('nro_serie') ? ' is-invalid' : '' }}" name="nro_serie" value="{{$robot->nro_serie}}" required autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nro_serie" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$robot->name}}" required autofocus>

                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Editar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

