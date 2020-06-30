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

    {{-- section1 --}}
    <section class="container">
        <div id="section1">

            <div class="main_left">
                <h3>DIVENTA</h3>
                <h2>SVILUPPATORE WEB</h2>
                <p>Trasformiamo la tua passione in una carriera. Se non <br> trovi lavoro, ti rimborsiamo.</p>
                <ul>
                    <li><strong>6 mesi</strong> di corso intensivo online in diretta</li>
                    <li><strong>Nessuna competenza</strong> di programmazione richiesta</li>
                    <li>Siamo certi del tuo successo, altrimenti <strong>ti rimborsiamo</strong></li>
                </ul>
            </div>
            <div class="main_right">
                <img src="{{asset ('img/pc-black-gif.gif')}}" alt="pc_code">
            </div>
        </div>
    </section>
    {{-- fine section1 --}}

    {{-- section2 --}}
    <section id="section2">
        <section class="container">

            <div class="statics">
                <div class="box1">
                    <h2>98%</h2>
                    <p>La percentuale dei nostri <br> studenti che ora lavora come <br> web developer, oltre la metà a <br> tempo indeterminato.</p>
                </div>
                <div class="box2">
                    <h2>€ 23.000</h2>
                    <p>Lo stipendio medio lordo di <br> partenza degli studenti assunti <br> dalle nostre aziende partner.</p>
                </div>
                <div class="box1">
                    <h2>#1</h2>
                    <p>Siamo il primo istituto online in <br> Italia per indice di gradimento e <br> risultati conseguiti.</p>
                </div>
            </div>
        </section>
    </section>
    {{-- fine section2 --}}

    {{-- section3  --}}
    <section class='container'>

            <span class="text">
                <p>I nostri studenti sono stati assunti da:</p>
            </span>
            <div class="loghi_aziende1">
                <img src="{{asset ('img/facileit.png')}}" alt="facile.it">
                <img class="img_center" src="{{asset ('img/oneday.png')}}" alt="oneday">
                <img src="{{asset ('img/prima.png')}}" alt="prima">
            </div>
            <div class="loghi_aziende2">
                <img src="{{asset ('img/fabbrica-digitale-big.png')}}" alt="fabbrica-digitale">
                <img class="img_center" src="{{asset ('img/nephila.png')}}" alt="nephila">
                <img src="{{asset ('img/rds.png')}}" alt="rds">
            </div>

    </section>
    {{-- fine section3 --}}

</main>

{{-- fine main --}}
{{-- inizio footer --}}
    @include('partials.footer')
{{-- fine footer --}}
    </body>
</html>
