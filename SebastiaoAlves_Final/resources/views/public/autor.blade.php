<x-public-layout>
    <section>
        <div
            class="container-md me-lg-0 my-4 p-3 p-lg-5 d-flex flex-column position-relative bg-white shadow first-container">
            <h5 class="text-uppercase lato fw-bolder gold">Autor</h5>
            <h4 class="text-uppercase font-ibm fw-normal">SOBRE O AUTOR</h4>
        </div>
        <div class="container p-3 p-lg-5">
            <div class="text-center">
                @if (count($author->getMedia()))
                    <img src="{{ $author->getMedia()[0]->getUrl() }}" alt="author image" class="img-fluid h-100 mx-auto">
                @endif
            </div>
            <div class="pt-5">
                {!! $author->author_text !!}</div>
            <button class="Cbtn d-flex me-auto">Voltar Atras</button>
        </div>
    </section>
</x-public-layout>
