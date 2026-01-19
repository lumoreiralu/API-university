@extends('layouts.header')
@section('content')

<main class="page-content">
    <div class="form-wrapper">
        <section class="form-card">
            <header class="form-header">
                <h2>Update Course</h2>
            </header>

            <form action="{{  url('updateCourse/' . $course->id)}}" method="POST">
            @csrf
            @method('PUT')
                <div class="input-group">
                    <label for="nombre_materia">Course Name</label>
                    <input type="text" id="nombre_materia" name="nombre_materia" 
                        value="{{old('nombre_materia', $course->nombre_materia)}}"  required>
                </div>

                <div class="input-group">
                    <label for="profesor">Profesor</label>
                    <input type="text" id="profesor" name="profesor" value = "{{old('nombre_profesor', $course->nombre_profesor)}}" required>
                </div>


                <div class="input-group">
                    <label for="id_carrera">Degree</label>
                    <select class="form-select" id="id_carrera" name="id_carrera" required>
                        @foreach($degrees as $degree)
                            <option value="{{$degree->id_carrera  }} " 
                                {{  $degree->id_carrera == $course->id_carrera ? 'selected' : '' }}>
                                {{$degree->nombre_carrera}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn-submit">Update Course</button>
                <a href="{{ url('/home') }}" class="btn-action">Cancel</a>
            </form>
        </section>

    </div>

</main>


@endsection