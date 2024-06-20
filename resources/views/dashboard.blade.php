<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        {{-- href="{{ route('biblioteca.create') }}" --}}

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('menu2.index')}}" >Ver menu</a><br>
        </li>
       
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('mesa.create')}}" >Crear mesa</a>
        </li>
          
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('plato.create')}}" >Crear nuevo plato</a>
        </li>
          
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('categoria.create')}}" >Crear nueva categoria</a>
        </li>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
