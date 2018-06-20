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
	</table>

</div>
@endsection
