@extends('layouts.app')

@section('content')
    <h1>Nova Loja</h1>
    <form action="{{ route('lojas.store') }}" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome"><br>
        <input type="text" name="endereco" placeholder="Endereço"><br>
        <input type="text" name="instagram" placeholder="Instagram"><br>
        <input type="text" name="telefone" placeholder="Telefone"><br>
        <button type="submit">Salvar</button>
    </form>
@endsection