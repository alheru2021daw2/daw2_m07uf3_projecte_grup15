@extends('disseny')
@section('content')
<x-app-layout>
        <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
<h1>Detalles de reservas</h1>
<div class="mt-5">
 <table class="table">
 <thead>
 <tr class="table-primary">
 <td>Passaport client</td>
 <td>Codi unic</td>
 <td>Localitzador</td>
 <td>Numero seient</td>
 <td>Equipatge ma</td>
 <td>Equipatge cabina</td>
 <td>Quantitat equipatge facturat +20kg</td>
 <td>Tipus assegurança</td>
 <td>Preu vol</td>
 <td>Tipus checking</td>
 </tr>
 </thead>
 <tbody>
 <tr>
 <td>{{$reserva->Passaport_client}}</td>
 <td>{{$reserva->Codi_unic}}</td>
 <td>{{$reserva->Localitzador}}</td>
 <td>{{$reserva->Numero_seient}}</td>
 <td>{{$reserva->Equipatge_ma == "1" ? 'Sí':'No'}}</td>
 <td>{{$reserva->Equipatge_cabina == "1" ? 'Sí':'No'}}</td>
 <td>{{$reserva->Quantitat_equipatge_facturat_20kg}}</td>
 <td>{{$reserva->Tipus_assegurança}}</td>
 <td>{{$reserva->Preu_vol}}</td>
 <td>{{$reserva->Tipus_checking}}</td>
 </tr>
 </tbody>
 </table>
<div>
<div class="p-6 bg-white border-b border-gray-200">
	<a href="{{url('reservas')}}">Vuelve a reservas<a/><br>
        <a href="{{url('dashboard')}}">Vuelve al dashboard<a/>
</div>
    </x-slot>
</x-app-layout>
@endsection
