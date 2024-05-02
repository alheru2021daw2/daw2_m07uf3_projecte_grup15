@extends('disseny')
@section('content')
<h1>Lista de clientes</h1>
<div class="mt-5">
<table class="table">
        <thead>
        <tr class="table-primary">
        <td>Passaport</td>
        <td>Nom</td>
        <td>Cognom</td>
        <td>Edat</td>
        <td>Telefon</td>
        <td>Adreça</td>
        <td>Ciutat</td>
        <td>Pais</td>
        <td>Email</td>
        <td>Tipus targeta</td>
        <td>Numero targeta</td>
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
 <td>{{$clientes->Telefon}}</td>
 <td>{{$clientes->Adressa}}</td>
 <td>{{$clientes->Ciutat}}</td>
 <td>{{$clientes->Pais}}</td>
 <td>{{$clientes->Email}}</td>
 <td>{{$clientes->Tipus_targeta}}</td>
 <td>{{$clientes->Numero_targeta}}</td>
@endforeach
</tbody>
</table>
<div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url ('dashboard-basic')}}">Torna al dashboard<a/>
</div>
<div>
@endsection
