<h1>Faça seu Login</h1>

@if (session('error'))
    <div style="color: red;">
        {{ session('error') }}
    </div>
@endif


<form action="{{ route('login.authenticate') }}" method="POST">
    @csrf

    <label for="email">Email</label>
    <input type="email" name="email" id="email">

    <label for="password">Senha</label>
    <input type="password" name="password" id="password">

    <button type="submit">Login</button>
</form>