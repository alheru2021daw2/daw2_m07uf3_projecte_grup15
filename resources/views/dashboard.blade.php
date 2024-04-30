<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-700">
			<a href="{{url('clientes')}}">Muestra datos de la tabla clientes<a/>
		</div>
		<div class="p-6-white border-b border-gray-200">
			<a>Muestra datos de la tabla vuelos<a/>
		</div>
		<div class="p-6-white border-b border-gray-200">
			<a>Muestra datos de la tabla reservas<a/>
		</div>
		<div class="p-6-white border-b border-gray-200">
			<a>Muestra datos de la tabla usuarios<a/>
		</div>
            </div>
        </div>
    </div>
</x-app-layout>
