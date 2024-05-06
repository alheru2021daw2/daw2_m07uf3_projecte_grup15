@extends('disseny')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    <h1>Detalles del Cliente</h1>
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
        </tr>
        </thead>
 <tbody>
 <tr>
 <td>{{$datos_cliente->Passaport_client}}</td>
 <td>{{$datos_cliente->Nom}}</td>
 <td>{{$datos_cliente->Cognoms}}</td>
 <td>{{$datos_cliente->Edat}}</td>
 <td>{{$datos_cliente->Telefon}}</td>
 <td>{{$datos_cliente->Adressa}}</td>
 <td>{{$datos_cliente->Ciutat}}</td>
 <td>{{$datos_cliente->Pais}}</td>
 <td>{{$datos_cliente->Email}}</td>
 <td>{{$datos_cliente->Tipus_targeta}}</td>
 <td>{{$datos_cliente->Numero_targeta}}</td>
</tr>
 </tbody>
 </table>
<div>
<div class="p-6 bg-white border-b border-gray-200">
        <a href="{{url('clientes')}}">Vuelve a clientes<a/><br>
        <a href="{{url('dashboard')}}">Vuelve al dashboard<a/>
</div>
    </x-slot>
</x-app-layout>
@endsection

