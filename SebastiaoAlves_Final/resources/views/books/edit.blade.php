<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Update Book
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            Update the book
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            Edit book details
                        </p>
                    </header>
                    @if ($book->media)
                        <h2 class="text-2xl font-medium text-gray-900">Image</h2>
                        <div class="max-w-xs">
                            <img src="{{ $book->media->baseMedia->getUrl() }}">

                        </div>
                    @endif
                    <form method="post" action="{{ route('books.update', $book->id) }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="title" value="Title" />
                            <x-text-input id="title" name="title" :value="old('title', $book->title)" type="text"
                                class="mt-1 block w-full" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>
                        <div>
                            <x-input-label for="text" value="Text" />
                            <x-wysiwyg-input id="text" name="text" :value="old('text', $book->text)" type="text"
                                class="mt-1 block w-full" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('text')" />
                        </div>
                        <div>
                            <div class="flex items-center gap-4">
                                <x-input-label for="is_featured" value="Featured" />
                                <input type="checkbox" class="border-gray-300 rounded h-5 w-5 mt-1 " id="is_featured"
                                    name="is_featured" value="1" {{ $book->is_featured == 1 ? ' checked' : '' }} />

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
                            <x-danger-button x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'confirm-book-deletion')">
                                {{ __('Delete book') }}</x-danger-button>
                            @if (session('status') === 'max-featured')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 8000)"
                                    class="text-sm text-red-600 flex-1">
                                    {{ __('Cannot set as featured as max amount already set. Remove some other from featured and try again. Was not saved to database but values restored.') }}
                                </p>
                            @endif
                            @if (session('status') === 'book-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-green-600">{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>

                </div>
            </div>


        </div>

        <x-modal name="confirm-book-deletion" focusable>
            <form method="post" action="{{ route('books.destroy', $book->id) }}" class="p-6">
                @csrf
                @method('delete')

                <h2 class="text-lg font-medium text-gray-900">
                    Are you sure you want to delete this book?
                </h2>

                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        Cancel
                    </x-secondary-button>

                    <x-danger-button class="ml-3">
                        Delete book
                    </x-danger-button>
                </div>
            </form>
        </x-modal>
    </div>
</x-app-layout>
