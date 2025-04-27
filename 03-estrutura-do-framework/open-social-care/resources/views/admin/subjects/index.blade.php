<h1>Listagem de Sujeitos</h1>

@if (session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

<ul>
    @foreach ($subjects as $subject)
        <li>
            <a href="{{ route('admin.subjects.detail', ['id' => $subject['id']]) }}">
                {{ $subject['name'] }}
            </a>
        </li>
    @endforeach
</ul>
