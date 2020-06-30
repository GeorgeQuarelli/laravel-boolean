<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>

{{-- menu  --}}
    @include('partials.menu')
{{-- fine menu --}}

{{-- main --}}
    @yield('content')

{{-- fine main --}}
{{-- inizio footer --}}
    @include('partials.footer')
{{-- fine footer --}}
    <script src="{{('js/app.js')}}" charset="utf-8"></script>
    </body>
</html>
