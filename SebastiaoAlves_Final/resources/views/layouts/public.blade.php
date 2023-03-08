<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;600;700&family=Lato:wght@900&display=swap"
        rel="stylesheet">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/custom.css'])
</head>

<body>
    <section class="headerAndNav">
        <div class="w-100 d-flex flex-column align-items-center z-index position-relative text-uppercase">
            <div class="d-flex justify-content-between w-75 align-items-center pt-4">
                <h1 class="titleText m-lg-auto">SEBASTIÃO ALVES</h1>
                <button class="navbar-toggler mobile-menu d-block d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">

                    <img src="{{ url('/assets/images/menu.svg') }}" alt="" class="">

                </button>
            </div>
            <div class="line text-center"></div>
            <div class="collapse navbar-collapse d-lg-block w-100" id="navbarNavAltMarkup">
                <div
                    class="container-md d-lg-flex flex-column flex-lg-row justify-content-center p-lg-0 flex-gap navbar-color">
                    <a href="{{ route('public.home') }}"
                        class="my-3 text-decoration-none nav-link lato {{ request()->routeIs('public.home') ? 'gold' : '' }}">Home</a>
                    <a href="{{ route('public.autor') }}"
                        class="my-3 text-decoration-none nav-link lato {{ request()->routeIs('public.autor') ? 'gold' : '' }}">Autor</a>
                    <div class="dropdown">
                        <a href="#"
                            class="my-3 text-decoration-none nav-link dropdown-toggle lato  {{ request()->routeIs('public.livros') ? 'gold' : '' }}"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Livros</a>
                        <ul class="dropdown-menu p-0">
                            <div class="w-auto shadow">
                                @foreach ($books as $book)
                                    <a href="{{ route('public.livros', $book->id) }}"
                                        class="dropdown-item text-decoration-none lato">{{ $book->title }}</a>
                                @endforeach

                            </div>
                        </ul>

                    </div>
                    <a href="{{ route('public.imprensa') }}"
                        class="my-3 text-decoration-none nav-link lato {{ request()->routeIs('public.imprensa') ? 'gold' : '' }}">Imprensa</a>
                    <a href="{{ route('public.contactos') }}"
                        class="my-3 text-decoration-none nav-link lato {{ request()->routeIs('public.contactos') ? 'gold' : '' }}">Contactos</a>
                </div>
            </div>
        </div>
        <!-- carousel -->
        <div id="carouselDesktop" class="carousel carousel-dark slide w-100 d-none d-lg-block" data-bs-ride="carousel">
            <div class="carousel-indicators indicators-style">
                @foreach ($banners as $banner)
                    <button type="button" data-bs-target="#carouselDesktop"
                        data-bs-slide-to="{{ $loop->iteration - 1 }}" class="{{ $loop->first ? 'active' : '' }}"
                        aria-current="{{ $loop->first }}" aria-label="Slide {{ $loop->iteration }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach ($banners as $banner)
                    <div class="carousel-item  {{ $loop->first ? 'active' : '' }}" data-bs-interval="4000">
                        <div class="d-flex align-items-end align-items-lg-center h-100">

                            <div style="background-image: url('{{ $banner->media->where('type', 'desktop')->first()->baseMedia->getUrl() }}')"
                                class="slider-img"></div>
                            <div class="caro-box p-3">
                                <h6 class="gold fw-bold text-uppercase">{{ $banner->remark }}</h6>
                                <h1 class="display-5 text-uppercase">{{ $banner->title }}</h1>
                                <p>{{ $banner->text }}</p>
                                <a class="Cbtn text-decoration-none" href="{{ $banner->link }}">SABER MAIS</a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselDesktop" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselDesktop" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- mobile carousel -->
        <div id="carouselMobile" class="carousel carousel-dark slide w-100 d-s-block d-lg-none" data-bs-ride="carousel">
            <div class="carousel-indicators indicators-style">

                @foreach ($banners as $banner)
                    <button type="button" data-bs-target="#carouselMobile"
                        data-bs-slide-to="{{ $loop->iteration - 1 }}" class="{{ $loop->first ? 'active' : '' }}"
                        aria-current="{{ $loop->first }}" aria-label="Slide {{ $loop->iteration }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach ($banners as $banner)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}" data-bs-interval="4000">
                        <div class="d-flex align-items-end align-items-lg-center h-100">

                            <div style="background-image: url('{{ $banner->media->where('type', 'mobile')->first()->baseMedia->getUrl() }}')"
                                class=" slider-img"></div>
                            <div class="caro-box p-3">
                                <h6 class="gold fw-bold text-uppercase">{{ $banner->remark }}</h6>
                                <h1 class="display-5 text-uppercase">{{ $banner->title }}</h1>
                                <p>{{ $banner->text }}</p>
                                <a class="Cbtn text-decoration-none" href="{{ $banner->link }}">SABER MAIS</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselMobile"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselMobile"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>
    <main>
        {{ $slot }}
    </main>
    <footer class="my-5">

        <!-- Menu buttons -->
        <div class="mb-5">
            <div class="line text-center"></div>
            <div class="d-none d-lg-flex justify-content-center flex-gap text-uppercase my-3 align-items-center">
                <a href="{{ route('public.home') }}"
                    class="text-decoration-none lato {{ request()->routeIs('public.home') ? 'gold' : '' }}">Home</a>
                <a href="{{ route('public.autor') }}"
                    class="text-decoration-none lato  {{ request()->routeIs('public.autor') ? 'gold' : '' }}">Autor</a>
                <div class="dropdown">
                    <a href="#"
                        class="my-3 text-decoration-none nav-link dropdown-toggle lato  {{ request()->routeIs('public.livros') ? 'gold' : '' }}"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">Livros</a>
                    <ul class="dropdown-menu p-0">
                        <div class="w-auto shadow">
                            @foreach ($books as $book)
                                <a href="{{ route('public.livros', $book->id) }}"
                                    class="dropdown-item text-decoration-none lato">{{ $book->title }}</a>
                            @endforeach

                        </div>
                    </ul>

                </div>
                <a href="{{ route('public.imprensa') }}"
                    class="text-decoration-none lato {{ request()->routeIs('public.imprensa') ? 'gold' : '' }}">Imprensa</a>
                <a href="{{ route('public.contactos') }}"
                    class="text-decoration-none lato  {{ request()->routeIs('public.contactos') ? 'gold' : '' }}">Contactos</a>
            </div>
            <div class="line text-center d-none d-lg-block"></div>
        </div>
        <div class="container d-flex flex-column flex-lg-row justify-content-between">

            <!-- adresses -->
            <div class="d-flex flex-column text-center text-lg-start">
                <h4 class="text-uppercase">Contactos</h4>
                <div class="d-flex flex-column flex-lg-row align-items-center">
                    <div class="w-25 m-2">
                        <h6 class="gold text-uppercase">Morada</h6>
                        <h6>{{ $site_information->address }}</h6>
                    </div>
                    <div class="m-2">
                        <h6 class="gold text-uppercase">Telefone</h6>
                        <h6>{{ $site_information->phone }}</h6>
                    </div>
                    <div class="m-2">
                        <h6 class="gold text-uppercase">Email</h6>
                        <h6>{{ $site_information->email }}</h6>
                    </div>
                </div>
            </div>

            <!-- socials -->
            <div class="d-flex flex-column text-center">
                <h4 class="text-uppercase">Siga-me nas redes socials</h4>
                <div class="d-flex flex-row justify-content-center">
                    <a href="{{ $site_information->facebook_url }}">
                        <img src="{{ url('/assets/images/facebook1.svg') }}" alt="facebook social" class="m-2 icon">

                    </a>
                    <a href="{{ $site_information->instagram_url }}">
                        <img src="{{ url('/assets/images/instagram1.svg') }}" alt="instagram social"
                            class="m-2 icon">

                    </a>
                    <a href="{{ $site_information->linkedin_url }}">
                        <img src="{{ url('/assets/images/linkedin1.svg') }}" alt="linkedin social" class="m-2 icon">

                    </a>
                </div>
            </div>
        </div>

        <!-- Copyrights -->
        <div class="container d-flex flex-column flex-lg-row justify-content-between align-items-center my-3">
            <div class="my-2">
                <img src="{{ url('/assets/images/livroreclamacoes.svg') }}" alt="">
                <img src="{{ url('/assets/images/ralc.svg') }}" alt="">
            </div>
            <div class="text-center my-2">
                <p>Politica de cookies <br> Copyright 2023 Grupo MediaMaster. Todos os direitos reservados</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
