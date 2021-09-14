<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">



    <!-- Styles -->
    <style>
        .container {
            max-width: 960px;
        }

        /*
 * Custom translucent site header
 */

        .site-header {
            background-color: rgba(0, 0, 0, .85);
            -webkit-backdrop-filter: saturate(180%) blur(20px);
            backdrop-filter: saturate(180%) blur(20px);
        }

        .site-header a {
            color: #999;
            transition: ease-in-out color .15s;
        }

        .site-header a:hover {
            color: #fff;
            text-decoration: none;
        }

        /*
 * Dummy devices (replace them with your own or something else entirely!)
 */

        .product-device {
            position: absolute;
            right: 10%;
            bottom: -30%;
            width: 300px;
            height: 540px;
            background-color: #333;
            border-radius: 21px;
            -webkit-transform: rotate(30deg);
            transform: rotate(30deg);
        }

        .product-device::before {
            position: absolute;
            top: 10%;
            right: 10px;
            bottom: 10%;
            left: 10px;
            content: "";
            background-color: rgba(255, 255, 255, .1);
            border-radius: 5px;
        }

        .product-device-2 {
            top: -25%;
            right: auto;
            bottom: 0;
            left: 5%;
            background-color: #e5e5e5;
        }


        /*
 * Extra utilities
 */

        .border-top {
            border-top: 1px solid #e5e5e5;
        }

        .border-bottom {
            border-bottom: 1px solid #e5e5e5;
        }

        .box-shadow {
            box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
        }

        .flex-equal>* {
            -ms-flex: 1;
            -webkit-box-flex: 1;
            flex: 1;
        }

        @media (min-width: 768px) {
            .flex-md-equal>* {
                -ms-flex: 1;
                -webkit-box-flex: 1;
                flex: 1;
            }
        }

        .overflow-hidden {
            overflow: hidden;
        }

    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    {{-- <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Meu Criado de Lojas Online</h4>
                        <p class="text-muted">
							Meu Criado de Lojas Online tem como objetivo dar oportunidades 
							para pequenos empreendimentos poderem ter suas própria lojas virtuais sem a necessidade
							de ter conhecimento em desenvolvimento de lojas virtuais!
						</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contato</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Siganos no Facebook</a></li>
                            <li><a href="#" class="text-white">E-mail para contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="mr-2">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                        </path>
                        <circle cx="12" cy="13" r="4"></circle>
                    </svg>
                    <strong>MeuCriadorOnline</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>

    </header> --}}
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="d-block mx-auto">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
                    <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
                    <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
                    <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
                    <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
                    <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
                </svg>
            </a>
            <a class="py-2 d-none d-md-inline-block" href="#">Tour</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Product</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Features</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Support</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Pricing</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
        </div>
    </nav>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Punny headline</h1>
            <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts
                with this example based on Apple's marketing pages.</p>
            <a class="btn btn-outline-secondary" href="#">Coming soon</a>
        </div>
        <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>

    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @foreach ($stores as $st)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" style="height: 225px; width: 100%; display: block;"
                                    alt="Card image cap"
                                    src="{{asset('storage/'. $st->image->first()->image_path)}}">
                                <div class="card-body">
                                    <h3>{{ $st->name }}</h3>
                                    <p class="card-text">{{ $st->description }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{route('pages.stores',['id'=>$st->id])}}" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                                            <a type="button" class="btn btn-sm btn-outline-secondary">Edit</a>
                                        </div>
                                        <small class="text-muted">{{$st->created_at->diffForHumans()}}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a
                    href="../../getting-started/">getting started guide</a>.</p>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
