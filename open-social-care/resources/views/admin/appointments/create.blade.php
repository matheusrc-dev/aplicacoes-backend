@extends('layouts.admin')

@section('title')
    Criação de um Atendimento
@endsection

@section('content')
    <form action="{{ route('admin.appointments.create') }}" method="POST">
        @csrf

        <label for="date">Data</label>
        <input type="date" name="date" id="date">

        <p>
            <label for="description">Descrição</label>
        </p>
        <textarea name="description" id="description" rows="5" cols="40"></textarea>

        <br>
        <button type="submit">Criar</button>
    </form>
@endsection
