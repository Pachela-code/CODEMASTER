<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Banners
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('banners.create') }}">

                <x-primary-button class="my-4">
                    Add New
                </x-primary-button>

            </a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    @if (count($banners) === 0)
                        No banner available
                    @else
                        <div class="overflow-x-auto">
                            <table class="w-full whitespace-nowrap">
                                <tr class="text-left font-bold ">
                                    <th class="px-6 pt-6 pb-4">
                                        Title
                                    </th>
                                    <th class="px-6 pt-6 pb-4">
                                        Text
                                    </th>
                                    <th class="px-6 pt-6 pb-4">
                                        Remark
                                    </th>
                                    <th class="px-6 pt-6 pb-4">
                                        Link
                                    </th>
                                </tr>
                                @foreach ($banners as $banner)
                                    <tr class="hover:bg-gray-100 focus-within:bg-gray-100 capitalize">
                                        <td class="border-t ">
                                            <a class="px-6 py-4 flex items-center "
                                                href="{{ route('banners.edit', $banner->id) }}">
                                                {{ $banner->title }}
                                            </a>
                                        </td>
                                        <td class="border-t ">
                                            <a class="px-6 py-4 flex items-center "
                                                href="{{ route('banners.edit', $banner->id) }}">
                                                {{ $banner->text }}
                                            </a>
                                        </td>
                                        <td class="border-t ">
                                            <a class="px-6 py-4 flex items-center "
                                                href="{{ route('banners.edit', $banner->id) }}">
                                                {{ $banner->remark }}
                                            </a>
                                        </td>
                                        <td class="border-t ">
                                            <a class="px-6 py-4 flex items-center "
                                                href="{{ route('banners.edit', $banner->id) }}">
                                                {{ $banner->link }}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
