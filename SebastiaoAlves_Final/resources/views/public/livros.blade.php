<x-public-layout>
    <section>
        <div
            class="container-md me-lg-0 my-4 p-3 p-lg-5 d-flex flex-column position-relative bg-white shadow first-container">
            <h5 class="text-uppercase gold">Livros</h5>
            <h4 class="text-uppercase">{{ $book->title }}</h4>
        </div>
        <div style="min-height: 650px" class="container p-3 p-lg-5">
            <div class="livro-contain my-4 float-start">
                <img class="mw-100 mh-100" src="{{ $book->media->baseMedia->getUrl() }}" alt="{{ $book->title }}">
            </div>
            <div class="my-3">
                <div>{!! $book->text !!}</div>
                <button class="Cbtn d-flex ms-auto">Voltar Atras</button>
            </div>
        </div>
    </section>
</x-public-layout>
