@extends('disseny')
@section('content')
<h1>Lista de clientes</h1>
<div class="mt-5">
<table class="table">
        <thead>
        <tr class="table-primary">
        <td>Passaport</td>
        <td>Nom</td>
        <td>Cognoms</td>
        <td>Edat</td>
        </tr>
        </thead>
 <tbody>
 @foreach($datos_clientes as $clientes)
 <tr>
 <td>{{$clientes->Passaport_client}}</td>
 <td>{{$clientes->Nom}}</td>
 <td>{{$clientes->Cognoms}}</td>
 <td>{{$clientes->Edat}}</td>
@endforeach
</tbody>
</table>
<div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url ('dashboard-basic')}}">Torna al dashboard<a/>
</div>
<div>
@endsection
