@extends('layouts.app')

@section('content')
<div class="container">
    
	<h1>FUNCIONALIDADES ARDUINO</h1>

	@if(!empty($ledON))
		<span class="alert alert-margin alert-success">
			<button class="close" data-close="alert"></button>
			{{ $ledON }}
		</span>
	@endif

	@if(!empty($ledOFF))
		<span class="alert alert-margin alert-danger">
			<button class="close" data-close="alert"></button>
			{{ $ledON }}
		</span>
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
				<td>Encender Led</td>
				<td>
					<form action="{{ route('arduino.ledOn', 1) }}" >
						<button class="btn btn-info btn-xs">
							<i class="far fa-lightbulb"></i>
						</button>
						
					</form>
				</td>
			</tr>
			<tr>
				<td>Apagar Led</td>
				<td>
					<form action="{{ route('arduino.ledOff', 0) }}" >
					<button class="btn btn-danger btn-xs">
						<i class="fas fa-power-off"></i>
					</button>
				</td>
			</tr>
		</tbody>
	</table>

</div>
@endsection
