<html>
	<head>
		<meta charset="UTF-8">
		<title>TESTE TEMPLATE</title>
	</head>
	<body>
		@include('header')
		<p>{{date('d/m/y')}}</p>
		<p>{{{'<script> alert("TESTE");</script>'}}}</p>
		<p>MEU NOME É {{$nome}} EU TRABALHO NA EMPRESA {{$empresa}}</p>
		@include('footer')
	</body>
</html>

