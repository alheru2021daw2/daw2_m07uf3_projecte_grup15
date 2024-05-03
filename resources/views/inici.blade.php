<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Proyecto M07UF3</title> 
	</head>
<body>
	<div>Pàgina inicial de l'empresa Flyfly</div>
	@if (Route::has('login'))
	@auth
		<a href="{{ url('/dashboard') }}">Dashboard</a>
		<br>
		        <div class="p-3 bg-white border-b border-gray-200">
       			<form id="logout-form" action="{{route('logout')}}" method="POST">
        		@csrf
        		<button type="submit">Logout</button>
       			</form>
        		</div>
	@else
		<a href="{{ route('login') }}">Log in</a><br>
	@endauth 
	@endif 
</body>
</html>
