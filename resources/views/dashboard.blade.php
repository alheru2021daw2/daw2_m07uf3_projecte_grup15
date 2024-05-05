<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard dels caps de departament') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-700">
			<a href="{{url('clientes')}}">Clientes: Visualiza, actualiza y borra un registro<a/>
		</div>
		<div class="p-6 text-gray-700">
                        <a href="{{url('clientes/create')}}">Clientes: crea un nuevo cliente<a/>
		</div>
		<hr>
		<div class="p-6 text-gray-700">
			<a href="{{url('vuelos')}}">Vuelos: Visualiza, actualiza y borra un registro<a/>
		</div>
                <div class="p-6 text-gray-700">
                        <a href="{{ url('vuelos/create') }}">Vuelos: crea un nuevo vuelo</a>
                </div>
		<hr>
		<div class="p-6 text-gray-700">
			<a href="{{url('reservas')}}">Reservas: Visualiza, actualiza y borra un registro<a/>
		</div>
		<div class="p-6 text-gray-700">
                        <a href="{{url('reservas/create')}}">Reservas: crea una nueva reserva<a/>
                </div>
		<hr>
		<div class="p-6 text-gray-700">
			<a href="{{route('register')}}">Crea un nuevo usuario</a><br>
		</div>
            </div>
        </div>
    </div>
</x-app-layout>
