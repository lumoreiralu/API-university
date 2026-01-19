@extends('layouts.header')
@section('content')

<main class="page-content">
    <div class="form-wrapper">
        <section class="form-card">
            <header class="form-header">
                <h2>Add New Course</h2>
                <p>Register a new academic course</p>
            </header>

            <form action="{{ url('/newCourse') }}" method="POST">
            @csrf
                <div class="input-group">
                    <label for="nombre_materia">Course Name</label>
                    <input type="text" id="nombre_materia" name="nombre_materia" placeholder="e.g. Algebra I" required>
                </div>
                @error('nombre_materia')
                        <span class="error-text" style="color: red; font-size: 0.8rem;">{{ $message }}</span>
                    @enderror
                <div class="input-group">
                    <label for="nombre_profesor">Professor Name</label>
                    <input type="text" id="nombre_profesor" name="nombre_profesor" placeholder="e.g. Jhon Clage" required>
                </div>

                <div class="input-group">
                    <label for="id_carrera">Degree</label>
                    <select class="form-select" id="id_carrera" name="id_carrera" required>
                    <option value="" disabled selected>Select a Degree</option>
                    @foreach($degrees as $degree)
                    <option value="{{ $degree->id_carrera }} "> {{$degree->nombre_carrera}}</option>
                    @endforeach
                    </select>
                </div>

                <button type="submit" class="btn-submit">Add Course</button>
            </form>
        </section>
    </div>
</main>


@endsection