<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Update Press
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            Update the Press
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            Edit Press details
                        </p>
                    </header>

                    <form method="post" action="{{ route('press.update', $press->id) }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="title" value="Title" />
                            <x-text-input id="title" name="title" :value="old('title', $press->title)" type="text"
                                class="mt-1 block w-full" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>
                        <div>
                            <x-input-label for="text" value="Text" />
                            <x-wysiwyg-input id="text" name="text" :value="old('text', $press->text)" type="text"
                                class="mt-1 block w-full" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('text')" />
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
                                x-on:click.prevent="$dispatch('open-modal', 'confirm-press-deletion')">
                                {{ __('Delete press') }}</x-danger-button>
                            @if (session('status') === 'max-featured')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 8000)"
                                    class="text-sm text-red-600 flex-1">
                                    {{ __('Cannot set as featured as max amount already set. Remove some other from featured and try again. Was not saved to database but values restored.') }}
                                </p>
                            @endif
                            @if (session('status') === 'press-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-green-600">{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>

                </div>
            </div>
            @if ($press->media)
                <h2 class="text-2xl font-medium text-gray-900">Image</h2>
                <div>
                    <img src="{{ $press->media->baseMedia->getUrl() }}">

                </div>
            @endif

        </div>

        <x-modal name="confirm-press-deletion" focusable>
            <form method="post" action="{{ route('press.destroy', $press->id) }}" class="p-6">
                @csrf
                @method('delete')

                <h2 class="text-lg font-medium text-gray-900">
                    Are you sure you want to delete this press?
                </h2>

                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        Cancel
                    </x-secondary-button>

                    <x-danger-button class="ml-3">
                        Delete press
                    </x-danger-button>
                </div>
            </form>
        </x-modal>
    </div>
</x-app-layout>
