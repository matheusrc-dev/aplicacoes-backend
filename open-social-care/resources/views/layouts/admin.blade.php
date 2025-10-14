<!DOCTYPE html>
<html>
@include('shared.head')

<body class="body-font text-gray-600">
    <div class="container mx-auto flex-col px-5">

        <x-admin.header />

        <h1>@yield('title')</h1>

        <x-flash />

        @yield('content')
    </div>
</body>

</html>
