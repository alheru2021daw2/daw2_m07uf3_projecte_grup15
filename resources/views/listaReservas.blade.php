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
 <td>Accions sobre la taula</td>
 </tr>
 </thead>
 <tbody>
 @foreach($datos_reservas as $reservas)
 <tr>
 <td>{{$reservas->Passaport_client}}</td>
 <td>{{$reservas->Codi_unic}}</td>
 <td>{{$reservas->Localitzador}}</td>
 <td class="text-left">
	<a href="{{url ('/reservas/' . $reservas->Passaport_client . '/' . $reservas->Codi_unic)}}" class="btn btn-info btn-sm">Mostrar</a>
        <a href="{{route ('reservas.edit', $reservas->Codi_unic)}}" class="btn btn-primary btn-sm">Edita</a>
        <form action="{{ route('reservas.destroy', $reservas->Codi_unic)}}" method="post" style="display: inline-block">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm" type="submit">
        Borrar
        </button>
        </form>
        <a href="{{ url('/reservas/' . $reservas->Passaport_client . '/' . $reservas->Codi_unic . '/pdf') }}" class="btn btn-warning btn-sm">PDF</a>
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
