<h1>Edição de um Sujeito</h1>

@if (session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div>
        {{ session('error') }}
    </div>
@endif

<form action="{{ route('admin.subjects.update', ['id' => $subject['id']]) }}" method="POST">
    @csrf

    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="{{ $subject['name'] }}">
    <button type="submit">Salvar</button>
</form>