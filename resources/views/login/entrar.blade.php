@extends('layouts.app')

@section('content')
    <h1>Autenticar</h1>
    @if(session('erro'))
        <div class="alert alert-danger">
            {{ session('erro') }}
        </div>
    @endif
    <form action="{{ route('login.validar') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Senha"><br>
        <button type="submit">Entrar</button>
    </form>
@endsection