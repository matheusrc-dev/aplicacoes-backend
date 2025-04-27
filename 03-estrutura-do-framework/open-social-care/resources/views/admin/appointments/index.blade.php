@extends('layouts.admin')

@section('title')
    Listagem de Atendimentos
@endsection

@section('content')
    <a href="{{ route('admin.appointments.create') }}">Novo Atendimento</a>

    <ul>
        @forelse ($appointments as $appointment)
            <li>
                <a href="{{ route('admin.appointments.detail', ['id' => $appointment['id']]) }}">
                    {{ $appointment['date'] }} - {{ $appointment['description'] }}
                </a>
            </li>
        @empty
            <p>(sem registros)</p>
        @endforelse
    </ul>
@endsection
