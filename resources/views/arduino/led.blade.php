@extends('layouts.app')
@section('content')
<div class="container">
	<h1>FUNCIONALIDADES ARDUINO</h1>
	@if(session('ledON'))
		<div class="alert alert-margin alert-dismissible alert-warning text-center margin-top-30 margin-bottom-40">
			<button class="close" data-close="alert" data-dismiss="alert" aria-label="close">&times;</button>
			{{ session('ledON') }}
		</div>
	@endif

	@if(session('ledOFF'))
		<div class="alert alert-margin alert-dismissible alert-danger text-center margin-top-30 margin-bottom-40">
			<button class="close" data-close="alert" data-dismiss="alert" aria-label="close">&times;</button>
			{{ session('ledOFF') }}
		</div>
	@endif

	<table class="table">
		<thead>
			<tr>
				<th>Funcionalidad</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Encender/Apagar Led</td>
				<td class="form-inline container">
					<form action="{{ route('arduino.ledOn', 1) }}" class="mr-2">
						<button class="btn btn-warning btn-sm">
							<i class="far fa-lightbulb"></i>
						</button>
					</form>
					<form action="{{ route('arduino.ledOff', 0) }}" class="ml-2">
						<button class="btn btn-danger btn-sm">
							<i class="fas fa-power-off"></i>
						</button>
					</form>
				</td>
			</tr>
		</tbody>
	</table>

</div>
@endsection
