@extends('layouts.app')

@section('content')
    <h1>Novo Usuário</h1>
    <form action="{{ route('cadastro.salvar') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nome"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Senha"><br>
        <input type="radio" value="Cliente" name="tipo" checked><label>Cliente</label>
        <input type="radio" value="MicroEmpreendedor" name="tipo"><label>Microempreendedor</label>
        <button type="submit">Salvar</button>
    </form>
@endsection