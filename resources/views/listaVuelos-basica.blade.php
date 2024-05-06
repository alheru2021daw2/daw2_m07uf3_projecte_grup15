@extends('disseny')
@section('content')
<x-app-layout>
        <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
<h1>Lista de vuelos básica</h1>
<div class="mt-5">
 <table class="table">
 <thead>
 <tr class="table-primary">
 <td>Codi unic</td>
 <td>Codi model</td>
 <td>Ciutat origen</td>
 <td>Ciutat destinacio</td>
 </tr>
 </thead>
 <tbody>
 @foreach($datos_vuelos as $vuelos)
 <tr>
 <td>{{$vuelos->Codi_unic}}</td>
 <td>{{$vuelos->Codi_model}}</td>
 <td>{{$vuelos->Ciutat_origen}}</td>
 <td>{{$vuelos->Ciutat_destinacio}}</td>
</tr>
 @endforeach
 </tbody>
 </table>
<div>
<div class="p-6 bg-white border-b border-gray-200">
        <a href="{{url('dashboard-basic')}}">Torna al dashboard<a/>
</div>
    </x-slot>
</x-app-layout>
@endsection

