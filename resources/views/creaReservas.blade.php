@extends('disseny')
@section('content')
<x-app-layout>
    <x-slot name="header">
<div class="card mt-5">
        <div class="card-header">
                Afegeix una nova reserva
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
        <form method="post" action="/reservas">
        @csrf
        <!-- https://laravel.com/docs/10.x/csrf -->
        <div class="form-group">
                <label for="Passaport_client">Passaport client</label>
                <input type="text" class="form-control" name="Passaport_client"/>
        </div>
        <div class="form-group">
                <label for="Codi_unic">Codi unic</label>
                <input type="text" class="form-control" name="Codi unic"/>
        </div>
        <div class="form-group">
                <label for="Localitzador">Localitzador</label>
                <input type="text" class="form-control" name="Localitzador"/>
        </div>
        <div class="form-group">
                <label for="Numero_seient">Numero seient</label>
                <input type="number" class="form-control" min="0" name="Numero_seient"/>
        </div>
        <div class="form-group">
                <label for="Equipatge_ma">Equipatge ma</label>
                <select name="Equipatge_ma">
			<option value="1">Sí</option>
			<option value="0">No</option>
		</select>
        </div>
        <div class="form-group">
                <label for="Equipatge_cabina">Equipatge cabina</label>
                <select name="Equipatge_cabina">
                        <option value="1">Sí</option>
                        <option value="0">No</option>
                </select>
        </div>
        <div class="form-group">
                <label for="Quantitat_equipatge_facturat_20kg">Quantitat equipatge facturat 20kg</label>
                <input type="number" class="form-control" name="Quantitat_equipatge_facturat_20kg" min="0"/>
        </div>
        <div class="form-group">
                <label for="Tipus_assegurança">Tipus assegurança</label>
                <select name="Tipus_assegurança">
                        <option value="Franquicia fins a 1000 Euros">Franquicia fins a 1000 Euros</option>
                        <option value="Franquicia fins a 500 Euros">Franquicia fins a 500 Euros</option>
                        <option value="Sense franquicia">Sense franquicia</option>
                </select>
        </div>
        <div class="form-group">
                <label for="Preu_vol">Preu vol</label>
                <input type="number" step="0.1" min="0.50" pattern="[0-9]+(\.[0-9]{1,2})?" class="form-control" name="Preu_vol"/>
        </div>
        <div class="form-group">
                <label for="Tipus_checking">Tipus checking</label>
                <select name="Tipus_checking">
                        <option value="On-line">On-line</option>
                        <option value="Mostrador">Mostrador</option>
                        <option value="Quiosc">Quiosc</option>
                </select>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
</div>
<div class="p-6 bg-white border-b border-gray-200">
        <a href="{{url('dashboard')}}">Torna al dashboard<a/>
</x-slot>
</x-app-layout>
@endsection
