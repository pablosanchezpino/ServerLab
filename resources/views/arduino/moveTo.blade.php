@extends('layouts.app')

@section('content')
<div class="container">
    
	<h1>FUNCIONALIDADES ARDUINO</h1>

	@if(session('move'))
		<div class="alert alert-margin alert-dismissible alert-success text-center margin-top-30 margin-bottom-40">
			<button class="close" data-close="alert" data-dismiss="alert" aria-label="close">&times;</button>
			{{ session('move') }}
		</div>
	@endif

<!--	<table class="table">
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
					<form action="{{ route('arduino.moveNowTo', 'W') }}" class="mr-2">
						<button class="btn btn-warning btn-sm btn-circle">
							<i class="fas fa-arrow-alt-circle-up"></i>
						</button>
					</form>
					<form action="{{ route('arduino.moveNowTo', 'X') }}" class="ml-2">
						<button class="btn btn-danger btn-sm btn-circle">
							<i class="fas fa-stop-circle"></i>
						</button>
					</form>
				</td>
			</tr>
			<tr>
				<td>Mover hacia atr&aacute;s</td>
				<td class="form-inline container">
					<form action="{{ route('arduino.moveNowTo', 'S') }}" class="mr-2">
						<button class="btn btn-warning btn-sm btn-circle">
							<i class="fas fa-arrow-alt-circle-down"></i>
						</button>
					</form>
					<form action="{{ route('arduino.moveNowTo', 'X') }}" class="ml-2">
						<button class="btn btn-danger btn-sm btn-circle">
							<i class="fas fa-stop-circle"></i>
						</button>
					</form>
				</td>
			</tr>
			<tr>
				<td>Mover hacia la izquierda</td>
				<td class="form-inline container">
					<form action="{{ route('arduino.moveNowTo', 'A') }}" class="mr-2">
						<button class="btn btn-warning btn-sm btn-circle">
							<i class="fas fa-arrow-alt-circle-left"></i>
						</button>
					</form>
					<form action="{{ route('arduino.moveNowTo', 'X') }}" class="ml-2">
						<button class="btn btn-danger btn-sm btn-circle">
							<i class="fas fa-stop-circle"></i>
						</button>
					</form>
				</td>
			</tr>
			<tr>
				<td>Mover hacia la derecha</td>
				<td class="form-inline container">
					<form action="{{ route('arduino.moveNowTo', 'D') }}" class="mr-2">
						<button class="btn btn-warning btn-sm btn-circle">
							<i class="fas fa-arrow-alt-circle-right"></i>
						</button>
					</form>
					<form action="{{ route('arduino.moveNowTo', 'X') }}" class="ml-2">
						<button class="btn btn-danger btn-sm btn-circle">
							<i class="fas fa-stop-circle"></i>
						</button>
					</form>
				</td>
			</tr>									
		</tbody>
	</table> -->
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
						Pasos: &nbsp;<select name="delay" id="delay-up">
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
						<button class="btn btn-warning btn-sm btn-circle" onclick='$("#program").val($("#program").val()+"W "+$("#delay-up").val()+" "+$("#comparador-up").val()+" "+$("#limite-up").val()+" "+$("#salto-up").val()+"\n")'>
							<i class="fas fa-arrow-alt-circle-up"></i>
						</button>

					<form action="{{ route('arduino.moveNowTo', 'X') }}" class="ml-2">
						<button class="btn btn-danger btn-sm btn-circle">
							<i class="fas fa-stop-circle"></i>
						</button>
					</form>
						&nbsp; &nbsp;
						<button id="compara-up" value="0"> IF </button>
						&nbsp; &nbsp;
						<div id="compara-ocultar-up">
						<select name="comparador" id="comparador-up">
						  <option value="_" selected>_</option>
						  <option value=">">Mayor</option>
						  <option value="<">Menor</option>
						  <option value="=">Igual</option>
						</select>
						&nbsp; &nbsp;
						<select name="limite" id="limite-up">
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
						<b>&nbsp; &nbsp; Salto instrucción: &nbsp; &nbsp;</b><select name="salto" id="salto-up">
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
					Pasos: &nbsp;<select name="delay" id="delay-dw">
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
						<button class="btn btn-warning btn-sm btn-circle" onclick='$("#program").val($("#program").val()+"S "+$("#delay-dw").val()+" "+$("#comparador-dw").val()+" "+$("#limite-dw").val()+" "+$("#salto-dw").val()+"\n")'>
							<i class="fas fa-arrow-alt-circle-down"></i>
						</button>
					<form action="{{ route('arduino.moveNowTo', 'X') }}" class="ml-2">
						<button class="btn btn-danger btn-sm btn-circle">
							<i class="fas fa-stop-circle"></i>
						</button>
					</form>
						&nbsp; &nbsp;
						<button id="compara-dw" value="0"> IF </button>
						&nbsp; &nbsp;
						<div id="compara-ocultar-dw">
						<select name="comparador" id="comparador-dw">
						  <option value="_" selected>_</option>
						  <option value=">">Mayor</option>
						  <option value="<">Menor</option>
						  <option value="=">Igual</option>
						</select>
						&nbsp; &nbsp;
						<select name="limite" id="limite-dw">
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
						<b>&nbsp; &nbsp; Salto instrucción: &nbsp; &nbsp;</b><select name="salto" id="salto-dw">
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
						Pasos: &nbsp;<select name="delay" id="delay-lf">
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
						<button class="btn btn-warning btn-sm btn-circle" onclick='$("#program").val($("#program").val()+"A "+$("#delay-lf").val()+" "+$("#comparador-lf").val()+" "+$("#limite-lf").val()+" "+$("#salto-lf").val()+"\n")'>
							<i class="fas fa-arrow-alt-circle-left"></i>
						</button>

					<form action="{{ route('arduino.moveNowTo', 'X') }}" class="ml-2">
						<button class="btn btn-danger btn-sm btn-circle">
							<i class="fas fa-stop-circle"></i>
						</button>
					</form>
						&nbsp; &nbsp;
						<button id="compara-lf" value="0"> IF </button>
						&nbsp; &nbsp;
						<div id="compara-ocultar-lf">
						<select name="comparador" id="comparador-lf">
						  <option value="_" selected>_</option>
						  <option value=">">Mayor</option>
						  <option value="<">Menor</option>
						  <option value="=">Igual</option>
						</select>
						&nbsp; &nbsp;
						<select name="limite" id="limite-lf">
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
						<b>&nbsp; &nbsp; Salto instrucción: &nbsp; &nbsp;</b><select name="salto" id="salto-lf">
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
						Pasos: &nbsp;<select name="delay" id="delay-rg">
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
						<button class="btn btn-warning btn-sm btn-circle" onclick='$("#program").val($("#program").val()+"D "+$("#delay-rg").val()+" "+$("#comparador-rg").val()+" "+$("#limite-rg").val()+" "+$("#salto-rg").val()+"\n")'>
							<i class="fas fa-arrow-alt-circle-right"></i>
						</button>
					<form action="{{ route('arduino.moveNowTo', 'X') }}" class="ml-2">
						<button class="btn btn-danger btn-sm btn-circle">
							<i class="fas fa-stop-circle"></i>
						</button>
					</form>
						&nbsp; &nbsp;
						<button id="compara-rg" value="0"> IF </button>
						&nbsp; &nbsp;
						<div id="compara-ocultar-rg">
						<select name="comparador" id="comparador-rg">
						  <option value="_" selected>_</option>
						  <option value=">">Mayor</option>
						  <option value="<">Menor</option>
						  <option value="=">Igual</option>
						</select>
						&nbsp; &nbsp;
						<select name="limite" id="limite-rg">
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
						<b>&nbsp; &nbsp; Salto instrucción: &nbsp; &nbsp;</b><select name="salto" id="salto-rg">
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
		</tbody>
	</table>

	<hr>

	<p><b>Secuencia</b></p>
					 
					<form method="get" action="{{ route('arduino.moveNowTo', 'Ejecutar') }}" class="ml-2">
						<textarea name="program" id="program" style="height: 100px"></textarea>
						<br><button>Ejecutar</button>
					</form>

</div>
@endsection
