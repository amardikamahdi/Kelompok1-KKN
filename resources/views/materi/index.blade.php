@extends('layouts._app')

@section('title', 'Materi')

@section('content')
<div class="container mx-auto mt-20">
    <h1 class="text-5xl uppercase mt-20 mb-20 text-center font-medium underline underline-offset-8">Kelas IV</h1>
    <div class="h-56 grid grid-cols-3 gap-4 content-start">
        <div>
            <a href="{{ route('findMateri', ['classId' => 4, 'themeId' => 1]) }}"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tema 1</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">PPKN, Bahasa Indonesia, IPS, IPA, SBdP</p>
            </a>
        </div>
        <div>
            <a href="{{ route('findMateri', ['classId' => 4, 'themeId' => 2]) }}"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tema 2</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">PPKN, Bahasa Indonesia, IPS, IPA, SBdP</p>
            </a>
        </div>
        <div>
            <a href="{{ route('findMateri', ['classId' => 4, 'themeId' => 3]) }}"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tema 3</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">PPKN, Bahasa Indonesia, IPS, IPA, SBdP</p>
            </a>
        </div>
        <div>
            <a href="{{ route('findMateri', ['classId' => 4, 'themeId' => 4]) }}"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tema 4</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">PPKN, Bahasa Indonesia, IPS, IPA, SBdP</p>
            </a>
        </div>
        <div>
            <a href="{{ route('findMateri', ['classId' => 4, 'themeId' => 5]) }}"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tema 5</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">PPKN, Bahasa Indonesia, IPS, IPA, SBdP</p>
            </a>
        </div>
        <div>
            <a href="{{ route('findMateri', ['classId' => 4, 'themeId' => 6]) }}"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Matematika</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Bilangan Prima, Kelipatan Faktor
                    Bilangan</p>
            </a>
        </div>
    </div>

    <h1 class="text-5xl uppercase mt-20 mb-20 text-center font-medium underline underline-offset-8">Kelas V</h1>
    <div class="h-56 grid grid-cols-3 gap-4 content-start">
        <div>
            <a href="{{ route('findMateri', ['classId' => 5, 'themeId' => 1]) }}"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tema 1</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">PPKN, Bahasa Indonesia, IPS, IPA, SBdP</p>
            </a>
        </div>
        <div>
            <a href="{{ route('findMateri', ['classId' => 5, 'themeId' => 2]) }}"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tema 2</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">PPKN, Bahasa Indonesia, IPS, IPA, SBdP</p>
            </a>
        </div>
        <div>
            <a href="{{ route('findMateri', ['classId' => 5, 'themeId' => 3]) }}"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tema 3</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">PPKN, Bahasa Indonesia, IPS, IPA, SBdP</p>
            </a>
        </div>
        <div>
            <a href="{{ route('findMateri', ['classId' => 5, 'themeId' => 4]) }}"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tema 4</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">PPKN, Bahasa Indonesia, IPS, IPA, SBdP</p>
            </a>
        </div>
        <div>
            <a href="{{ route('findMateri', ['classId' => 5, 'themeId' => 5]) }}"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tema 5</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">PPKN, Bahasa Indonesia, IPS, IPA, SBdP</p>
            </a>
        </div>
        <div>
            <a href="{{ route('findMateri', ['classId' => 5, 'themeId' => 6]) }}"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Matematika</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Perbandingan, Kecepatan, Debit, Skala</p>
            </a>
        </div>
    </div>

    <h1 class="text-5xl uppercase mt-20 mb-20 text-center font-medium underline underline-offset-8">Kelas VI</h1>
    <div class="h-56 grid grid-cols-3 gap-4 content-start">
        <div>
            <a href="#"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tema 1</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">PPKN, Bahasa Indonesia, IPS, IPA, SBdP</p>
            </a>
        </div>
        <div>
            <a href="#"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tema 2</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">PPKN, Bahasa Indonesia, IPS, IPA, SBdP</p>
            </a>
        </div>
        <div>
            <a href="#"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tema 3</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">PPKN, Bahasa Indonesia, IPS, IPA, SBdP</p>
            </a>
        </div>
        <div>
            <a href="#"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tema 4</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">PPKN, Bahasa Indonesia, IPS, IPA, SBdP</p>
            </a>
        </div>
        <div>
            <a href="#"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tema 5</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">PPKN, Bahasa Indonesia, IPS, IPA, SBdP</p>
            </a>
        </div>
        <div>
            <a href="#"
                class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Matematika</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Bilangan Bulat, Lingkaran</p>
            </a>
        </div>
    </div>
</div>
@endsection
