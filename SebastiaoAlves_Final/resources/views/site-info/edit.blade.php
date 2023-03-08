<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Site Information') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <header class="mb-7">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Author Information') }}
                        </h2>
                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Update author details') }}
                        </p>
                    </header>
                    <div>
                        @if (count($site_information->getMedia()))
                            <div class="max-w-xs">
                                <img src="{{ $site_information->getMedia()[0]->getUrl() }}">
                            </div>
                        @endif
                    </div>

                    <form method="post" action="{{ route('site-info.update') }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="author_image" value="Author Image" />
                            <x-text-input id="author_image" name="author_image" type="file"
                                class="mt-1 block w-full rounded-none" autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('author_image')" />
                        </div>
                        <div>
                            <x-input-label for="author_name" value="Author Name" />
                            <x-text-input id="author_name" name="author_name" type="text" class="mt-1 block w-full"
                                :value="old('author_name', $site_information->author_name)" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('author_name')" />
                        </div>
                        <div>
                            <x-input-label for="author_text" value="Author Text" />
                            <x-wysiwyg-input id="author_text" name="author_text" type="text"
                                class="mt-1 block w-full" :value="old('author_text', $site_information->author_text)" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('author_text')" />
                        </div>
                        <div>
                            <x-input-label for="latest_text" value="Latest Text" />
                            <x-wysiwyg-input id="latest_text" name="latest_text" type="text"
                                class="mt-1 block w-full" :value="old('latest_text', $site_information->latest_text)" autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('latest_text')" />
                        </div>
                        <div class="pt-10">
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Contact Information') }}
                            </h2>
                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Update contact details') }}
                            </p>
                        </div>

                        <div>
                            <x-input-label for="email" value="Email" />
                            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                                :value="old('email', $site_information->email)" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>
                        <div>
                            <x-input-label for="phone" value="Phone Number" />
                            <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full"
                                :value="old('phone', $site_information->phone)" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                        </div>
                        <div>
                            <x-input-label for="address" value="Address" />
                            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full"
                                :value="old('address', $site_information->address)" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('address')" />
                        </div>
                        <div class="pt-10">
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Socials') }}
                            </h2>
                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Update socials') }}
                            </p>
                        </div>
                        <div>
                            <x-input-label for="facebook_url" value="Facebook" />
                            <x-text-input id="facebook_url" name="facebook_url" type="text" class="mt-1 block w-full"
                                :value="old('facebook_url', $site_information->facebook_url)" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('facebook_url')" />
                        </div>
                        <div>
                            <x-input-label for="instagram_url" value="Instagram" />
                            <x-text-input id="instagram_url" name="instagram_url" type="text"
                                class="mt-1 block w-full" :value="old('instagram_url', $site_information->instagram_url)" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('instagram_url')" />
                        </div>
                        <div>
                            <x-input-label for="linkedin_url" value="Linkedin" />
                            <x-text-input id="linkedin_url" name="linkedin_url" type="text" class="mt-1 block w-full"
                                :value="old('linkedin_url', $site_information->linkedin_url)" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('linkedin_url')" />
                        </div>
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                            @if (session('status') === 'information-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-green-600">{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
