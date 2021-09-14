<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style-pages.css') }}">
    <title>Seu Site aqui - ^^</title>
</head>

<body>

    <header>
        <div class="container">
            <h2>Seja Bem Vindo!</h2>
            <p>Aproveite nossas ofertas!</p>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Sobre</a></li>
            <li><a href="">Contatos</a></li>
        </ul>
    </nav>
    <main>
        <section class="section-container">
            @foreach ($store->products as $key => $p)
                <div class="section-box-card">
                    <div class="card-head" >
                        <img class="imagem" src="{{asset('storage/'. $p->image->first()->image_path)}}">
						<div class="information">
							<p>{{$p->slug}}</p>
							<p>R$ {{ number_format($p->price, '2',',','.')}}</p>
						</div>
                    </div>
                    <div class="card-body">
                        <h3>{{$p->name}}</h3>
                    </div>
                    <div class="card-footer"></div>
                </div>
            @endforeach

        </section>
    </main>
    <footer>
        <div class="footer-center">
            <p>Todos Direitos Reservado - copyright - 2021</p>
        </div>
    </footer>
</body>

</html>
