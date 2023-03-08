<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Presses
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('press.create') }}">

                <x-primary-button class="my-4">
                    Add New
                </x-primary-button>

            </a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    @if (count($presses) === 0)
                        No press available
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
                                </tr>
                                @foreach ($presses as $press)
                                    <tr class="hover:bg-gray-100 focus-within:bg-gray-100 capitalize">
                                        <td class="border-t ">
                                            <a class="px-6 py-4 flex items-center"
                                                href="{{ route('press.edit', $press->id) }}">
                                                @if ($press->is_featured)
                                                    <span class="flex items-center gap-6">
                                                        <span class="block bg-yellow-500 rounded-full w-4 h-4"></span>
                                                        {{ $press->title }}

                                                    </span>
                                                @else
                                                    {{ $press->title }}
                                                @endif
                                            </a>
                                        </td>
                                        <td class="border-t ">
                                            <a class="px-6 py-4 flex items-center "
                                                href="{{ route('press.edit', $press->id) }}">
                                                {{ \Illuminate\Support\Str::words(strip_tags($press->text), 8, '.....') }}
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
