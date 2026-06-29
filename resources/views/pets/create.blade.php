@extends('layouts.app')

@section('title', 'Registrar Mascota')

@section('content')
<div class="card">
    <h2>Registrar Nueva Mascota</h2>

    <form action="{{ route('pets.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="name" required>
        </div>

        <div class="form-group">
            <label>Especie (Ej. Perro, Gato):</label>
            <input type="text" name="species" required>
        </div>

        <div class="form-group">
            <label>Edad (años):</label>
            <input type="number" name="age" required>
        </div>

        <button type="submit" class="btn">Guardar Mascota</button>
        <a href="{{ route('pets.index') }}" class="btn btn-secondary">Volver a la lista</a>
    </form>
</div>
@endsection