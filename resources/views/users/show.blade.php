@extends('layouts.app')

@section('content')
    <h1>Usuário: {{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <a href="{{ route('users.index') }}">Voltar</a>
@endsection