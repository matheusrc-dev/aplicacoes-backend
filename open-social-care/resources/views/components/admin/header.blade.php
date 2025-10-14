<header class="body-font text-gray-600">
    <div class="container mx-auto flex flex-row flex-wrap items-center justify-between p-5">
        <a class="title-font flex items-center font-medium text-gray-900" href="{{ route('admin.subjects.index') }}">
            <img class="h-10 w-10 rounded-full" src="{{ asset('images/logo.png') }}" alt="logo">
            <span class="ml-3 text-xl"> {{ env('APP_NAME') }} </span>
        </a>

        <a href="{{ route('welcome') }}"
            class="inline-flex cursor-pointer items-center rounded border-0 bg-gray-100 px-3 py-1 text-base hover:bg-gray-200 focus:outline-none md:mt-0">Sair
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="ml-1 h-4 w-4" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</header>
