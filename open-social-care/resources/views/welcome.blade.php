@extends('layouts.public')

@section('content')
    <img class="mb-10 w-5/6 rounded object-cover object-center md:w-3/6 lg:w-2/6" alt="hero"
        src="{{ asset('images/welcome.svg') }}">
    <div class="w-full text-center lg:w-2/3">
        <h1 class="title-font mb-4 text-3xl font-medium text-gray-900 sm:text-4xl">
            {{ env('APP_NAME') }}
        </h1>

        <p class="mb-8 leading-relaxed">Simplifique a gestão de atendimentos sociais.</p>
        <div class="flex justify-center">
            <a href="{{ route('admin.subjects.index') }}"
                class="inline-flex cursor-pointer rounded border-0 bg-green-500 px-6 py-2 text-lg text-white hover:bg-green-600 focus:outline-none">
                Entrar
            </a>
            <a href="#"
                class="ml-4 inline-flex cursor-pointer rounded border-0 bg-gray-100 px-6 py-2 text-lg text-gray-700 hover:bg-gray-200 focus:outline-none">
                Register
            </a>
        </div>
    </div>
@endsection
