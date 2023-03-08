<x-public-layout>

    <section>
        <div
            class="container-md me-lg-0 my-4 p-3 p-lg-5 d-flex flex-column position-relative bg-white shadow first-container">
            <h5 class="text-uppercase gold">Imprensa</h5>
            <h4 class="text-uppercase">Ultimas Noticias</h4>
        </div>
        @foreach ($presses as $press)
            <div class="container p-3 p-lg-5 d-flex flex-column align-items-center flex-gap">
                <div class="d-flex flex-column w-100">
                    <h4 class="text-uppercase fw-normal font-ibm">{{ $press->title }}</h4>
                    <div class="line bg-gold w-100"></div>
                    <p class="fs-6 d-flex ms-auto fw-normal text-uppercase font-ibm">Publicade
                        {{ \Carbon\Carbon::parse($press->created_at)->locale('pt')->isoFormat('ll') }}
                    </p>
                </div>
                @if ($press->media)
                    <div>
                        <img src="{{ $press->media->baseMedia->getUrl() }}" alt="{{ $press->title }}" class="w-100 my-4">
                    </div>
                @endif
                <div>{!! $press->text !!}</div>

            </div>
            @if ($loop->first)
                <div class="shadow-box"></div>
            @endif
        @endforeach

        <!-- pagination button -->
        <div>
            {{ $presses->links('pagination::default') }}

        </div>

    </section>
</x-public-layout>
