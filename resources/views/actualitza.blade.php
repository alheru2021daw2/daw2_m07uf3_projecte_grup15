@extends('disseny')
@section('content')
<x-app-layout>
	<x-slot name="header">
<div class="card mt-5">
	<div class="card-header">
		Actualitzación de datos
	</div>
	<div class="card-body">
		@if ($errors->any())
		<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form method="post" action="{{route('clientes.update', $datos_cliente->Passaport_client)}}">
        @csrf
	@method('PATCH')
        <!-- https://laravel.com/docs/10.x/csrf -->
	<div class="form-group">
		<label for="Passaport_client">Passaport</label>
		<input type="text" class="form-control" name="Passaport_client"/>
	</div>
        <div class="form-group">
                <label for="Nom">Nom</label>
                <input type="text" class="form-control" name="Nom"/>
        </div>
        <div class="form-group">
                <label for="Cognoms">Cognoms</label>
                <input type="text" class="form-control" name="Cognoms"/>
        </div>
        <div class="form-group">
                <label for="Edat">Edat</label>
                <input type="text" class="form-control" name="Edat"/>
        </div>
        <div class="form-group">
                <label for="Telefon">Telefon</label>
                <input type="text" class="form-control" name="Telefon"/>
        </div>
        <div class="form-group">
                <label for="Adressa">Adressa</label>
                <input type="text" class="form-control" name="Adressa"/>
        </div>
        <div class="form-group">
                <label for="Ciutat">Ciutat</label>
                <input type="text" class="form-control" name="Ciutat"/>
        </div>
        <div class="form-group">
                <label for="Pais">Pais</label>
                <input type="text" class="form-control" name="Pais"/>
        </div>
        <div class="form-group">
                <label for="Email">Email</label>
		<input type="text" class="form-control" name="Email"/>
	</div>
        <div class="form-group">
                <label for="Tipus_targeta">Tipus targeta</label>
                <select name="Tipus_targeta">
                        <option value="Debit">Debit</option>
                        <option value="Credit">Credit</option>
                </select>
        </div>
        <div class="form-group">
                <label for="Numero_targeta">Numero targeta</label>
                <input type="text" class="form-control" name="Numero_targeta"/>
        </div>

        <button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
        </div>
</div>
<div class="p-6 bg-white border-b border-gray-200">
<br><a href="{{url('clientes')}}">Acceso directo a la lista de clientes<a/>
<br><a href="{{url('dashboard')}}">Vuelve al dashboard<a/>
</x-slot>
</x-app-layout>
@endsection
