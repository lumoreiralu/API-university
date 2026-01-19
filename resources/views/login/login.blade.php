@extends('layouts.header')
@section('content')

    <main class="main-content">
    <section class="form-card" style="max-width: 600px;">
        <header class="form-header">
            <h1>Login</h1>
        </header>
        <form action="{{ url('/login') }}" method="POST">
        @csrf
            <div class="input-group">
                <label for="nombre_usuario">User:</label>
                <input type="text" name="nombre_usuario" id="nombre_usuario" placeholder="MariaHoffman" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="1234" required>
            </div>
            <button type="submit" class="btn-submit" >Login</button>
        </form>
        <div style="margin-top: 20px;">
            <a href="{{ url('/home') }}" style="text-decoration: none; color: #98b1ad;">← Back to home</a>
        </div>
    </section>
</main>

@endsection