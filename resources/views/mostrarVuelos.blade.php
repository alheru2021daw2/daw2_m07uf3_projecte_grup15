@extends('disseny')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    <h1>Detalles del Vuelo</h1>
<div class="mt-5">
<table class="table">
        <thead>
        <tr class="table-primary">
	<td>Codi unic</td>
	<td>Codi model</td>
	<td>Ciutat origen</td>
	<td>Ciutat destinacio</td>
	<td>Terminal origen</td>
	<td>Terminal destinacio</td>
	<td>Data sortida</td>
	<td>Data arribada</td>
	<td>Hora sortida</td>
	<td>Hora arribada</td>
	<td>Classe</td>        
        </tr>
        </thead>
 <tbody>
 <tr>
 <td>{{$datos_vuelo->Codi_unic}}</td>
 <td>{{$datos_vuelo->Codi_model}}</td>
 <td>{{$datos_vuelo->Ciutat_origen}}</td>
 <td>{{$datos_vuelo->Ciutat_destinacio}}</td>
 <td>{{$datos_vuelo->Terminal_origen}}</td>
 <td>{{$datos_vuelo->Terminal_destinacio}}</td>
 <td>{{$datos_vuelo->Data_sortida}}</td>
 <td>{{$datos_vuelo->Data_arribada}}</td>
 <td>{{$datos_vuelo->Hora_sortida}}</td>
 <td>{{$datos_vuelo->Hora_arribada}}</td>
 <td>{{$datos_vuelo->Classe}}</td>
</tr>
 </tbody>
 </table>
<div>
<div class="p-6 bg-white border-b border-gray-200">
        <a href="{{url('vuelos')}}">Vuelve a vuelos<a/><br>
        <a href="{{url('dashboard')}}">Vuelve al dashboard<a/>
</div>
    </x-slot>
</x-app-layout>
@endsection
