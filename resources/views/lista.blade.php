@extends('disseny')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
<h1>Lista de clientes</h1>
<div class="mt-5">
<table class="table">
 	<thead>
 	<tr class="table-primary">
 	<td>Passaport</td>
 	<td>Nom</td>
	<td>Cognoms</td>
	<td>Edat</td>
	<td>Acciones sobre la tabla</td> 
 	</tr>
 	</thead>
 <tbody>
 @foreach($datos_clientes as $clientes)
 <tr>
 <td>{{$clientes->Passaport_client}}</td>
 <td>{{$clientes->Nom}}</td>
 <td>{{$clientes->Cognoms}}</td>
 <td>{{$clientes->Edat}}</td>
 <td class="text-left">
	<a href="{{route ('clientes.mostrar', $clientes->Passaport_client)}}"class="btn btn-info btn-sm">Mostra</a>
	<a href="{{ route('clientes.edit', $clientes->Passaport_client)}}" class="btn btn-primary btn-sm">Edita</a>
	<form action="{{route('clientes.destroy', $clientes->Passaport_client)}}" method="post" style="display: inline-block">
	@csrf
	@method('DELETE')
	<button class="btn btn-danger btn-sm" type="submit">
	Borrar
	</button>
	</form>
        <a href="{{url('/clientes/' . $clientes->Passaport_client . '/pdfC')}}" class="btn btn-warning btn-sm">PDF</a>
</td> 
</tr>
 @endforeach
 </tbody>
 </table>
<div>
<div class="p-6 bg-white border-b border-gray-200">
	<a href="{{url('dashboard')}}">Torna al dashboard<a/>
</div>
    </x-slot>
</x-app-layout>
@endsection

