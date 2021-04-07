<!--DOCTYPE html-->
<html>
	<head>
		<title>Atividade 1 - @yield("titulo")</title>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/estilo.css') }}" />
		<script src="{{ asset('js/jquery.js') }}"></script>
		<script src="{{ asset('js/bootstrap.js') }}"></script>
		<script src="{{ asset('js/script.js') }}"></script>
	</head>
	<body>
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<div class="collapse navbar-collapse">
					<div class="navbar-nav">
						<a class="nav-link" href="/carro">Carro</a>
					</div>
				</div>
			</div>
		</nav>
		
		@if (Session::get("status") == "salvo")
			<div class="alert alert-success" role="alert">
				Salvo com sucesso!
			</div>
		@endif
		
		@if (Session::get("status") == "excluido")
			<div class="alert alert-danger" role="alert">
				Excluído com sucesso!
			</div>
		@endif
		
		<div class="container">
		
			@yield("cadastro")
			
			@yield("listagem")
			
		</div>
	</body>
</html>