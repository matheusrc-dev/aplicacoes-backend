@extends('layouts.admin')

@section('title')
    Detalhes do Atendimento
@endsection

@section('content')
    <a href="{{ route('admin.appointments.edit', ['id' => $appointment['id']]) }}">Editar</a>

    <p>
        <strong>ID:</strong> {{ $appointment['id'] }}
    </p>
    <p>
        <strong>Data:</strong> {{ $appointment['date'] }}
    </p>
    <p>
        <strong>Descrição:</strong> {{ $appointment['description'] }}
    </p>
@endsection

