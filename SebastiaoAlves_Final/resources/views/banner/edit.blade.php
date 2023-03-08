<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Update Banner
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            Update the banner
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            Edit banner details
                        </p>
                    </header>

                    <form method="post" action="{{ route('banners.update', $banner->id) }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="title" value="Title" />
                            <x-text-input id="title" name="title" :value="old('title', $banner->title)" type="text"
                                class="mt-1 block w-full" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>
                        <div>
                            <x-input-label for="text" value="Text" />
                            <x-text-input id="text" name="text" :value="old('text', $banner->text)" type="text"
                                class="mt-1 block w-full" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('text')" />
                        </div>
                        <div>
                            <x-input-label for="remark" value="Remark" />
                            <x-text-input id="remark" name="remark" :value="old('remark', $banner->remark)" type="text"
                                class="mt-1 block w-full" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('remark')" />
                        </div>
                        <div>
                            <x-input-label for="link" value="Learn More Link" />
                            <x-text-input id="link" name="link" :value="old('link', $banner->link)" type="text"
                                class="mt-1 block w-full" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('link')" />
                        </div>
                        <div>
                            <x-input-label for="desktop_image" value="Desktop Image" />
                            <x-text-input id="desktop_image" name="desktop_image" type="file"
                                class="mt-1 block w-full rounded-none" autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('desktop_image')" />
                        </div>
                        <div>
                            <x-input-label for="mobile_image" value="Mobile Image" />
                            <x-text-input id="mobile_image" name="mobile_image" type="file"
                                class="mt-1 block w-full rounded-none" autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('mobile_image')" />
                        </div>
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                            <x-danger-button x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'confirm-banner-deletion')">
                                {{ __('Delete Banner') }}</x-danger-button>
                            @if (session('status') === 'banner-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-green-600">{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>

                </div>
            </div>
            @if (count($banner->media->where('type', 'desktop')) > 0)
                <h2 class="text-2xl font-medium text-gray-900">Desktop Image</h2>

                <img src="{{ $banner->media->where('type', 'desktop')->first()->baseMedia->getUrl() }}">
            @endif
            @if (count($banner->media->where('type', 'mobile')) > 0)
                <h2 class="text-2xl font-medium text-gray-900">Mobile Image</h2>

                <img src="{{ $banner->media->where('type', 'mobile')->first()->baseMedia->getUrl() }}">
            @endif
        </div>

        <x-modal name="confirm-banner-deletion" focusable>
            <form method="post" action="{{ route('banners.destroy', $banner->id) }}" class="p-6">
                @csrf
                @method('delete')

                <h2 class="text-lg font-medium text-gray-900">
                    Are you sure you want to delete this banner?
                </h2>

                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        Cancel
                    </x-secondary-button>

                    <x-danger-button class="ml-3">
                        Delete Banner
                    </x-danger-button>
                </div>
            </form>
        </x-modal>
    </div>
</x-app-layout>
