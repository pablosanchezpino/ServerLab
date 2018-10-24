@extends('layouts.app')

@section('content')
<div class="container">

	<ol class="breadcrumb">
      <li class="breadcrumb-item">
      <a href="{{ url('/') }}">Home</a>
      </li>
      <li class="breadcrumb-item active">{{ config('app.name', 'Laravel') }}</li>
    </ol>

	@if(session('move'))
		<div class="alert alert-margin alert-dismissible alert-success text-center margin-top-30 margin-bottom-40">
			<button class="close" data-close="alert" data-dismiss="alert" aria-label="close">&times;</button>
			{{ session('move') }}
		</div>
    @endif
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Funcionalidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mover hacia adelante</td>
                            <td class="form-inline container">
                                    Pasos: &nbsp;<select name="delay" id="delay-up" class="pasos">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    </select>
                                    &nbsp; &nbsp;
                                    <button class="btn btn-warning btn-sm btn-circle" id='arriba'>
                                        <i class="fas fa-arrow-alt-circle-up"></i>
                                    </button>

                                    &nbsp; &nbsp;
                                    <button id="compara-up" value="0" class="btn btn-primary"> IF </button>
                                    &nbsp; &nbsp;
                                    <div id="compara-ocultar-up">
                                    <select name="comparador" id="comparador-up" class="pasos">
                                    <option value="_" selected>_</option>
                                    <option value=">">Mayor</option>
                                    <option value="<">Menor</option>
                                    <option value="=">Igual</option>
                                    </select>
                                    &nbsp; &nbsp;
                                    <select name="limite" id="limite-up" class="pasos">
                                    <option value="_" selected>_</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    </select>
                                    <b>&nbsp; &nbsp; Salto instrucción: &nbsp; &nbsp;</b><select name="salto" id="salto-up" class="pasos">
                                    <option value="_" selected>_</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    </select>
                                    &nbsp; &nbsp;
                                    </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Mover hacia atr&aacute;s</td>
                            <td class="form-inline container">
                                Pasos: &nbsp;<select name="delay" id="delay-dw" class="pasos">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                </select>
                                &nbsp; &nbsp;
                                    <button class="btn btn-warning btn-sm btn-circle" id='abajo'>
                                        <i class="fas fa-arrow-alt-circle-down"></i>
                                    </button>

                                    &nbsp; &nbsp;
                                    <button id="compara-dw" value="0" class="btn btn-primary"> IF </button>
                                    &nbsp; &nbsp;
                                    <div id="compara-ocultar-dw">
                                    <select name="comparador" id="comparador-dw" class="pasos">
                                    <option value="_" selected>_</option>
                                    <option value=">">Mayor</option>
                                    <option value="<">Menor</option>
                                    <option value="=">Igual</option>
                                    </select>
                                    &nbsp; &nbsp;
                                    <select name="limite" id="limite-dw" class="pasos">
                                    <option value="_" selected>_</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    </select>
                                    <b>&nbsp; &nbsp; Salto instrucción: &nbsp; &nbsp;</b><select name="salto" id="salto-dw" class="pasos">
                                    <option value="_" selected>_</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    </select>

                                    &nbsp; &nbsp;
                                    </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Mover hacia la izquierda</td>
                            <td class="form-inline container">
                                    Pasos: &nbsp;<select name="delay" id="delay-lf" class="pasos">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    </select>
                                    &nbsp; &nbsp;
                                    <button class="btn btn-warning btn-sm btn-circle" id='izquierda'>
                                        <i class="fas fa-arrow-alt-circle-left"></i>
                                    </button>

                                    &nbsp; &nbsp;
                                    <button id="compara-lf" value="0" class="btn btn-primary"> IF </button>
                                    &nbsp; &nbsp;
                                    <div id="compara-ocultar-lf">
                                    <select name="comparador" id="comparador-lf" class="pasos">
                                    <option value="_" selected>_</option>
                                    <option value=">">Mayor</option>
                                    <option value="<">Menor</option>
                                    <option value="=">Igual</option>
                                    </select>
                                    &nbsp; &nbsp;
                                    <select name="limite" id="limite-lf" class="pasos">
                                    <option value="_" selected>_</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    </select>
                                    <b>&nbsp; &nbsp; Salto instrucción: &nbsp; &nbsp;</b><select name="salto" id="salto-lf" class="pasos">
                                    <option value="_" selected>_</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    </select>
                                    &nbsp; &nbsp;
                                    </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Mover hacia la derecha</td>
                            <td class="form-inline container">
                                    Pasos: &nbsp;<select name="delay" id="delay-rg" class="pasos">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    </select>
                                    &nbsp; &nbsp;
                                    <button class="btn btn-warning btn-sm btn-circle" id='derecha'>
                                        <i class="fas fa-arrow-alt-circle-right"></i>
                                    </button>

                                    &nbsp; &nbsp;
                                    <button id="compara-rg" value="0" class="btn btn-primary"> IF </button>
                                    &nbsp; &nbsp;
                                    <div id="compara-ocultar-rg">
                                    <select name="comparador" id="comparador-rg" class="pasos">
                                    <option value="_" selected>_</option>
                                    <option value=">">Mayor</option>
                                    <option value="<">Menor</option>
                                    <option value="=">Igual</option>
                                    </select>
                                    &nbsp; &nbsp;
                                    <select name="limite" id="limite-rg" class="pasos">
                                    <option value="_" selected>_</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    </select>
                                    <b>&nbsp; &nbsp; Salto instrucción: &nbsp; &nbsp;</b><select name="salto" id="salto-rg" class="pasos">
                                    <option value="_" selected>_</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    </select>
                                    &nbsp; &nbsp;
                                    </div>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <iframe class="youtube mt-3" src="https://www.youtube.com/embed/8VyiaffrhHk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    </div>
    <hr>
    <div class="row mt-3 mb-2">
      <div class="col-sm-12">
          <button id="for-grupo" value="0" class="btn btn-success"> INICIAR FOR </button>
						<select name="ciclos" id="ciclos" class="pasos">
						  <option value="1" selected>1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>
						  <option value="8">8</option>
						  <option value="9">9</option>
						</select>
						<input type="hidden" id="grupo" value="0"/>
      </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <p><b>Secuencia</b></p>

					<form method="get" action="{{ route('arduino.moveNowTo2', 'Ejecutar') }}" class="ml-2">

                        <div id="pool">
                            <div id="flecha-clone" class="esconder">
                                <img src="" id="imagen" class="flecha"/>
                                <div id="delay"></div>
                                <input type="hidden" name="secuencia[]" value="X 1 _ _ _ 0 1" id="secuencia"/>
                            </div>
                        </div>

						<br><button class="btn btn-info"><i class="fas fa-play-circle"></i></button>
					</form>

        </div>
    </div>

</div>
@endsection
