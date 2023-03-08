<x-public-layout>
    <section class="home my-4 my-lg-0">
        <div
            class="container-md me-lg-0 px-3 p-lg-5 d-flex flex-column flex-lg-row align-items-center position-relative bg-white flex-gap shadow first-container">
            @if (count($site_information->getMedia()))
                <img src="{{ $site_information->getMedia()[0]->getUrl() }}" alt="author image" class="img-fluid h-100">
            @endif
            <div class="text d-flex flex-column flex-gap py-4 flex-grow-1">
                <h1 class="font-ibm text-uppercase fs-3 fw-bold">Bem-vindo ao Meu Website</h1>
                <div>{!! $site_information->author_text !!}</div>
                <button class="Cbtn d-flex ms-auto">SABER MAIS</button>
            </div>
        </div>
        <div class="container p-3 pt-5 p-lg-5">
            <h1>Últimos Livros</h1>
            <div>{!! $site_information->latest_text !!}</div>
        </div>

        <!-- books feature -->
        <div class="container px-3 p-lg-5 pt-0">
            <div class="p1 d-flex justify-content-between flex-wrap">
                @foreach ($featured_books as $book)
                    <div class="card shadow my-4 border-0">
                        <img src="{{ $book->media->baseMedia->getUrl() }}" alt="{{ $book->title }}">
                        <div class="card-body ">
                            <h4 class="card-title">{{ $book->title }}</h4>
                            <h6 class="card-subtitle gold">Subtitle</h6>
                            <div class="card-text">{!! \Illuminate\Support\Str::words($book->text, 50) !!}</div>
                            <button class="Cbtn d-flex ms-auto">SABER MAIS</button>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</x-public-layout>
