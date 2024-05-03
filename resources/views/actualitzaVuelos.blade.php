@extends('disseny')
@section('content')
<x-app-layout>
	<x-slot name="header">
<div class="card mt-5">
        <div class="card-header">
                Actualitzación de datos
        </div>
        <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                </ul>
        </div>
        @endif
        <form method="post" action="{{route('vuelos.update', $datos_vuelo->Codi_unic)}}">
        @csrf
        @method('PATCH')
        <!-- https://laravel.com/docs/10.x/csrf -->
        <div class="form-group">
                <label for="Codi_unic">Codi unic</label>
                <input type="text" class="form-control" name="Codi unic"/>
        </div>
        <div class="form-group">
                <label for="Codi_model">Codi model</label>
                <input type="text" class="form-control" name="Codi model"/>
        </div>
        <div class="form-group">
                <label for="Ciutat_origen">Ciutat origen</label>
                <input type="text" class="form-control" name="Ciutat_origen"/>
        </div>
        <div class="form-group">
                <label for="Ciutat_destinacio">Ciutat destinacio</label>
                <input type="text" class="form-control" name="Ciutat_destinacio"/>
        </div>
        <div class="form-group">
                <label for="Terminal_origen">Terminal origen</label>
                <input type="text" class="form-control" name="Terminal_origen"/>
        </div>
        <div class="form-group">
                <label for="Terminal_destinacio">Terminal destinacio</label>
                <input type="text" class="form-control" name="Terminal_destinacio"/>
        </div>
        <div class="form-group">
                <label for="Data_sortida">Data sortida</label>
                <input type="date" class="form-control" name="Data_sortida"/>
        </div>
        <div class="form-group">
                <label for="Data_arribada">Data arribada</label>
                <input type="date" class="form-control" name="Data_arribada"/>
        </div>
        <div class="form-group">
                <label for="Hora_sortida"></label>
                <input type="time" class="form-control" name="Hora_sortida"/>
        </div>
        <div class="form-group">
                <label for="Hora_arribada">Hora arribada</label>
                <input type="time" class="form-control" name="Hora_arribada"/>
        </div>
        <div class="form-group">
                <label for="Classe">Classe</label>
                <select name="Classe">
                        <option value="Turista">Turista</option>
                        <option value="Bussiness">Bussiness</option>
                        <option value="Primera">Primera</option>
                </select>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
        </div>
</div>
<div class="p-6 bg-white border-b border-gray-200">
<a href="{{url('vuelos')}}">Acceso directo a la lista de vuelos<a/>
<br> <a href="{{url('dashboard')}}">Vuelve al dashboard<a/>
</x-slot>
</x-app-layout>
@endsection
