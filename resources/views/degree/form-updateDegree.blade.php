@extends('layouts.header')
@section('content')

<main class="page-content">
    <div class="form-wrapper">
        <section class="form-card">
            <header class="form-header">
                <h2>Update Degree</h2>
            </header>

            <form action="{{url('updateDegree/' . $degree->id_carrera  )}}" method="POST">
            @csrf
            @method('PUT')
                <div class="input-group">
                    <label for="nombre_carrera">Degree Name</label>
                    <input type="text" id="nombre_carrera" name="nombre_carrera" 
                        value="{{ old('nombre_carrera', $degree->nombre_carrera) }}" required>
                </div>

                <div class="input-group">
                    <label for="duracion">Duration</label>
                    <input type="text" id="duracion" name="duracion" 
                        value="{{ old('duracion', $degree->duracion) }}" required>
                </div>

                <button type="submit" class="btn-submit">Update Degree</button>
                <a href="{{ url('/home') }}" class="btn-action">Cancel</a>
            </form>
        </section>

    </div>

</main>


@endsection