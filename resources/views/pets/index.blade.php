@extends('layouts.app')

@section('title', 'Listado de Mascotas')

@section('content')
  <div class="card">
    <h2>Directorio de Mascotas</h2>
    @if(session('success'))
      <div class="alert-success">
        {{ session('success') }}
      </div>
    @endif
    <div class="actions">
      <a href="{{ route('pets.create') }}" class="btn">Registrar Nueva Mascota</a>
    </div>
    <div class="bg-white rounded-xl shadow p-4 mb-6">
      <form method="GET" action="{{ route('pets.index') }}" class="flex gap-3 items-center">
        <label class="font-semibold text-slate-800">Filtrar:</label>
        <input type="text" name="buscar" placeholder="Especie (Ej. Gato)" value="{{ request('buscar') }}"
          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
        <button type="submit" class="bg-slate-800 hover:bg-slate-700 text-white px-4 py-2 rounded-lg transition">
          Buscar
        </button>
        <a href="{{ route('pets.index') }}"
          class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition">
          Limpiar
        </a>
      </form>
    </div>
    <div class="bg-white rounded-xl shadow overflow-hidden">
      <table class="w-full border-collapse">
        <thead>
          <tr class="bg-slate-800 text-white">
            <th class="px-4 py-3 text-left">ID</th>
            <th class="px-4 py-3 text-left">Nombre</th>
            <th class="px-4 py-3 text-left">Especie</th>
            <th class="px-4 py-3 text-left">Edad</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pets as $pet)
                    <tr class="border-b hover:bg-gray-100 transition">
                      <td class="px-4 py-3">{{ $pet->id }}</td>
                      <td class="px-4 py-3 font-semibold">{{ $pet->name}}</td>
                      <td class="px-4 py-3">{{ $pet->species }}</td>
                      <td class="px-4 py-3">{{ $pet->age }} años</td>
                    </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="mt-6">
      {{ $pets->links() }}
    </div>
  </div>
@endsection