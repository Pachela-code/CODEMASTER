<x-public-layout>
    <section>
        <div
            class="container-md me-lg-0 my-4 p-3 p-lg-5 d-flex flex-column position-relative bg-white shadow first-container">
            <h5 class="text-uppercase gold">Contactos</h5>
            <h4 class="text-uppercase">Lorem ipsum dolor sit amet consectetur adipisicing</h4>
        </div>
        <div class="container p-5 p-md-3 p-lg-5 d-flex flex-column flex-gap text-center">
            <div class="d-flex flex-column flex-lg-row flex-gap justify-content-center">
                <div class="my-3">
                    <h6 class="text-uppercase gold">Telefone</h6>
                    <p>{{ $site_information->phone }}</p>
                </div>
                <div class="my-3">
                    <h6 class="text-uppercase gold">Morada</h6>
                    <p>{{ $site_information->address }}</p>
                </div>
                <div class="my-3">
                    <h6 class="text-uppercase gold">Email</h6>
                    <p>{{ $site_information->email }}</p>
                </div>
            </div>
            <div class="line w-25 my-3"></div>
            <div class="my-3">
                <h6 class="text-uppercase gold">Horario</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing eligendi</p>
            </div>
        </div>
    </section>
</x-public-layout>
