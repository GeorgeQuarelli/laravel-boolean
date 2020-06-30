<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>

{{-- menu  --}}
    @include('partials.menu')
{{-- fine menu --}}

{{-- main --}}
<main>
    <section class="container">
        @include('partials.section1')

    </section>
    <section id="section2">
        @include('partials.section2')
    </section>

</main>

{{-- fine main --}}

<footer>

</footer>
    </body>
</html>
