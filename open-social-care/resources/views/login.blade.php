@extends("layouts.public")

@section("title")
    Faça seu Login
@endsection


@section('content')
    <x-flash />

    <form action="{{ route('login.authenticate') }}" method="POST">
        @csrf

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="password">Senha</label>
        <input type="password" name="password" id="password">

        <button type="submit">Login</button>
    </form>
@endsection


