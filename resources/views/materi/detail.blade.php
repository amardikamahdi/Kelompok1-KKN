@extends('layouts._app')

@section('title', 'Materi')

@section('content')
<div class="container mx-auto">
    @if($materi->file != NULL)
    <embed src="{{ asset('storage/materis/' . $materi->file) }}" height="600px" class="w-full mt-8" />
    @endif


    <a
        class="block p-6 w-100 bg-white rounded-lg mt-20 border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-center text-gray-900 dark:text-white">{{ $materi->name }}
        </h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">{!! $materi->description !!}</p>
    </a>
</div>
@endsection
