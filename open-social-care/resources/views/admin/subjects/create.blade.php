@extends('layouts.admin')

@section('title')
    Criação de Sujeito
@endsection

@section('content')
    <x-admin.subject-form :action="route('admin.subjects.store')" />
@endsection
