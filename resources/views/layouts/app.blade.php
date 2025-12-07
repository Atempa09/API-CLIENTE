<!DOCTYPE html>
<html lang="es">
<head>
    <title>API MI PROYECTO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>@yield('title')</title>

	<!-- Archivo CSS -->
	<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

	<div class="container">
		@yield('content')
	</div>

</body>
</html>
