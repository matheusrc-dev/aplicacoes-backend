@extends('layouts.admin')

@section('title')
    Criação de um Sujeito
@endsection

@section('content')
    <form action="{{ route('admin.subjects.create') }}" method="POST">
        @csrf

        <label for="name">Nome</label>
        <input type="text" name="name" id="name">
        <button type="submit">Criar</button>
    </form>
@endsection
