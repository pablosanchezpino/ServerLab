@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <strong>
                        Bienvenido a ServerLab <span class="text-capitalize">{{ Auth::user()->name }}</span>: 
                    </strong>
                    <div>Robotica Educativa te permitira aprender y crear algo sorprendente !</div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
