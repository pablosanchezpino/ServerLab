@extends('layouts.app')

@section('content')
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>Home ServerLab</strong></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <strong>
                        Bienvenido(a) a ServerLab <span class="text-capitalize">{{ Auth::user()->name }}</span>:
                    </strong>
                    <div><br>
                    ServerLab es una plataforma de aprendizaje interactivo que te ayudara a fomentar el "Razonamiento Lógico" atraves de la robotica educativa.
                    </div><br>
                    <div><strong> Importancia del Razonamiento lógico Informatico</strong></div>
                    <br>
                    <div> Ayuda a la elaboración de programas utilizando la lógica y el razonamiento computacional.</div>
                    <div> Permite encontrar la mejores estrategias para solucionar problemas lógicos que nos lleve a la mejor solución.</div>
                    <div> Saber si un desarrollo es correcto, tanto en matemáticas como en otras materia de ciencia. </div>
                    <div> Presenta el lenguaje de expresión booleana que utilizamos en los diferentes lenguajes de programación, en base de datos y en cualquier otra materia de computación que utilice conceptos lógicos. </div>
                    <br>
                    <div><strong> Te invitamos a participar de las practica disponibles con la finalidad  que en un futuro seas capaz de crear algo sorprendente !</strong></div>
                    </div>
                   

                </div>
            </div>
        </div>
@endsection
