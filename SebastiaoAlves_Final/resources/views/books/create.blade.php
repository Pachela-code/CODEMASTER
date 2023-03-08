<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Book
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            Create new book
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            Add book details to create new book
                        </p>
                    </header>
                    <form method="post" enctype="multipart/form-data" action="{{ route('books.store') }}"
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
                            <x-wysiwyg-input id="text" name="text" :value="old('text')" type="text"
                                class="mt-1 block w-full" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('text')" />
                        </div>
                        <div>
                            <div class="flex items-center gap-4">
                                <x-input-label for="is_featured" value="Featured" />
                                <input type="checkbox" class="border-gray-300 rounded h-5 w-5 mt-1 " id="is_featured"
                                    name="is_featured" value="1" />

                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('is_featured')" />
                        </div>
                        <div>
                            <x-input-label for="image" value="Image" />
                            <x-text-input id="image" name="image" type="file"
                                class="mt-1 block w-full rounded-none" autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('image')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                            @if (session('status') === 'max-featured')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 8000)"
                                    class="text-sm text-red-600">
                                    {{ __('Cannot set as featured as max amount already set. Remove some other from featured and try again.') }}
                                </p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
