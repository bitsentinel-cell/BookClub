@extends('layouts.app')

@section('content')


<div class="flex flex-col mt-8">
    <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            id</th>
                        <th <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Title</th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Author</th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            SubTitle</th>

                    </tr>
                </thead>
                @foreach ($BookData as $book )
                <tbody class="bg-white">
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex items-center">

                                <div class="ml-0">
                                    <div class="text-sm font-medium leading-5 text-gray-900">
                                        {{ $book->id }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-10 h-10">
                                    <img class="w-10 h-10 rounded-full" src="{{ $book->smallThumbnail }}">
                                </div>

                                <div class=" ml-4">
                                    <div class="text-sm font-medium leading-5 text-gray-900">
                                        {{ $book->title }}
                                    </div>
                                </div>

                            </div>
                        </td>


                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex items-center">

                                <div class="ml-4">
                                    <div class="text-sm font-medium leading-5 text-gray-900">
                                        {{ $book->authors }}
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex-shrink-0 w-10 h-10">
                                <img class="w-10 h-10 rounded-full" src="{{ $book->thumbnail }}">
                            </div>
                            <div class="text-sm leading-5 text-gray-500">{{ $book->subtitle }}</div>
                        </td>



                    </tr>

                </tbody>
                @endforeach

            </table>
            {{ $BookData->links('pagination::tailwind') }}

        </div>
    </div>
</div>




@endsection