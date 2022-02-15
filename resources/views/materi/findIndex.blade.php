@extends('layouts._app')

@section('title', 'Materi')

@section('content')
<div class="container mx-auto mt-20">
    <h1 class="text-5xl uppercase mt-20 mb-20 text-center font-medium underline underline-offset-8">Kelas {{ $classId }}
        - Tema {{ $themeId }}</h1>
    @if($materis->count() == 0)
    <div class="w-full md:w-1/3 mx-auto">
        <div class="flex justify-center items-center p-6 rounded-lg shadow bg-red-100" style="height: 500px">
            <div class="m-auto text-center">
                <h2 class="font-semibold text-5xl text-gray-700">Mohon Maaf. Materi belum tersedia, silahkan menunggu
                    materi untuk di Upload.</h2>
            </div>
        </div>
    </div>
    @else
    <div class="grid grid-cols-4 gap-20">
        @foreach($materis as $materi)
        <div
            class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $materi->name }}
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $materi->subject }}</p>
                <a href="#"
                    class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Baca
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection
