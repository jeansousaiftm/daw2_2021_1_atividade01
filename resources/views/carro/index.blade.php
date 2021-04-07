@extends("template.default")

@section("titulo", "Carros")

@section("cadastro")
	
	<h1>Cadastro de Veículos</h1>

	<form class="row" action="/carro" method="POST">
		
		<div class="form-group col-4">
			<label for="marca">Marca:</label>
			<input type="text" id="marca" name="marca" class="form-control" value="{{ $carro->marca }}" />
		</div>
		
		<div class="form-group col-4">
			<label for="modelo">Modelo:</label>
			<input type="text" id="modelo" name="modelo" class="form-control" value="{{ $carro->modelo }}" />
		</div>
		
		<div class="form-group col-4">
			<label for="placa">Placa:</label>
			<input type="text" id="placa" name="placa" class="form-control" value="{{ $carro->placa }}" />
		</div>
		
		<div class="form-group col-4">
			<label for="cor">Cor:</label>
			<input type="text" id="cor" name="cor" class="form-control" value="{{ $carro->cor }}" />
		</div>
		
		<div class="form-group col-4">
			<label for="ano">Ano:</label>
			<input type="text" id="ano" name="ano" class="form-control" value="{{ $carro->ano }}" />
		</div>
		
		<div class="form-group col-4">
			
			<br/>
			
			@csrf
			<input type="hidden" id="id" name="id" value="{{ $carro->id }}" />
			
			<a href="/carro" class="btn btn-primary">Novo</a>
			<button type="submit" class="btn btn-success">Salvar</button>
			
		</div>
		
	</form>
	
@endsection

@section("listagem")

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Placa</th>
				<th>Cor</th>
				<th>Ano</th>
				<th>Edit</th>
				<th>Del</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($carros as $carro)
				<tr>
					<td>{{ $carro->marca }}</td>
					<td>{{ $carro->modelo }}</td>
					<td>{{ $carro->placa }}</td>
					<td>{{ $carro->cor }}</td>
					<td>{{ $carro->ano }}</td>
					<td>
						<a href="/carro/{{ $carro->id }}/edit" class="btn btn-warning">Edit</a>
					</td>
					<td>
						<form method="POST" action="/carro/{{ $carro->id }}">
							<input type="hidden" name="_method" value="DELETE" />
							@csrf
							<button type="submit" class="btn btn-danger">Del</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@endsection