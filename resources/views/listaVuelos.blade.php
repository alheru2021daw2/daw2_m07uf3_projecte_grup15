@extends('disseny')
@section('content')
<x-app-layout>
	<x-slot name="header">
	<h2 class="font-semibold text-xl text-gray-800 leading-tight">
	</h2>
<h1>Lista de vuelos</h1>
<div class="mt-5">
 <table class="table">
 <thead>
 <tr class="table-primary">
 <td>Codi unic</td>
 <td>Codi model</td>
 <td>Ciutat origen</td>
 <td>Ciutat destinacio</td>
 <td>Accions sobre la taula</td> 
 </tr>
 </thead>
 <tbody>
 @foreach($datos_vuelos as $vuelos)
 <tr>
 <td>{{$vuelos->Codi_unic}}</td>
 <td>{{$vuelos->Codi_model}}</td>
 <td>{{$vuelos->Ciutat_origen}}</td>
 <td>{{$vuelos->Ciutat_destinacio}}</td>

 <td class="text-left">
	<a href="{{route('vuelos.mostrar', $vuelos->Codi_unic)}}" class="btn btn-info btn-sm">Mostrar</a>
        <a href="{{ route('vuelos.edit', $vuelos->Codi_unic)}}" class="btn btn-primary btn-sm">Edita</a>
        <form action="{{route('vuelos.destroy', $vuelos->Codi_unic)}}" method="post" style="display: inline-block">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm" type="submit">
        Borrar
        </button>
        </form>
        <a href="{{url('/vuelos/' . $vuelos->Codi_unic . '/pdf')}}" class="btn btn-warning btn-sm">PDF</a>
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
