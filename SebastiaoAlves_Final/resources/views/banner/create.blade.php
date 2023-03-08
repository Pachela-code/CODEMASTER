<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Banner
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            Create new banner
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            Add details to create new banner
                        </p>
                    </header>
                    <form method="post" enctype="multipart/form-data" action="{{ route('banners.store') }}"
                        class="mt-6 space-y-6">
                        @csrf
                        <div>
                            <x-input-label for="title" value="Title" />
                            <x-text-input id="title" name="title" :value="old('title')" type="text"
                                class="mt-1 block w-full" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>
                        <div>
                            <x-input-label for="text" value="Text" />
                            <x-text-input id="text" name="text" :value="old('text')" type="text"
                                class="mt-1 block w-full" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('text')" />
                        </div>
                        <div>
                            <x-input-label for="remark" value="Remark" />
                            <x-text-input id="remark" name="remark" :value="old('remark')" type="text"
                                class="mt-1 block w-full" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('remark')" />
                        </div>
                        <div>
                            <x-input-label for="link" value="Learn More Link" />
                            <x-text-input id="link" name="link" :value="old('link')" type="text"
                                class="mt-1 block w-full" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('link')" />
                        </div>
                        <div>
                            <x-input-label for="desktop_image" value="Desktop Image" />
                            <x-text-input id="desktop_image" name="desktop_image" type="file"
                                class="mt-1 block w-full" autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('desktop_image')" />
                        </div>
                        <div>
                            <x-input-label for="mobile_image" value="Mobile Image" />
                            <x-text-input id="mobile_image" name="mobile_image" type="file" class="mt-1 block w-full"
                                autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('mobile_image')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
