@extends('layouts.header')
@section('content')

<main class="main-content">
    <section class="form-card" style="max-width: 600px;">
        <header class="form-header">
            <h1>{{ $course->nombre_materia }}</h1>
            <p><strong>Professor:</strong> {{ $course->nombre_profesor }}</p>
            <p>
                <strong>Degree:</strong> 
                @if($course->carrera)
                    {{ $course->carrera->nombre_carrera }}
                @else
                    No asignada
                @endif
            </p>
        </header>

        <div style="margin-top: 20px;">
            <a href="{{ url('/courses') }}" style="text-decoration: none; color: #98b1ad;">← Back to list</a>
        </div>
    </section>
</main>

@endsection