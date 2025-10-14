@extends('layouts.admin')

@section('title')
    Edição de um Atendimento
@endsection

@section('content')
    <form action="{{ route('admin.appointments.update', ['id' => $appointment['id']]) }}" method="POST">
        @csrf

        <label for="date">Data</label>
        <input type="date" name="date" id="date" value="{{ $appointment['date'] }}">


        <p><label for="description">Descrição</label></p>
        <textarea name="description" id="description" rows="5" cols="40">{{ $appointment['description'] }}</textarea>

        <br>

        <button type="submit">Salvar</button>
    </form>
@endsection
