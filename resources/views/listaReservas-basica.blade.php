@extends('disseny')
@section('content')
<x-app-layout>
        <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
<h1>Lista de reservas</h1>
<div class="mt-5">
 <table class="table">
 <thead>
 <tr class="table-primary">
 <td>Passaport client</td>
 <td>Codi unic</td>
 <td>Localitzador</td>
 </tr>
 </thead>
 <tbody>
 @foreach($datos_reservas as $reservas)
 <tr>
 <td>{{$reservas->Passaport_client}}</td>
 <td>{{$reservas->Codi_unic}}</td>
 <td>{{$reservas->Localitzador}}</td>
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
