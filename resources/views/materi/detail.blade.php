@extends('layouts._app')

@section('title', 'Materi')

@section('content')
<div class="container mx-auto text-center">
    <embed src="{{ asset('assets/materi/bunyi.swf') }}" height="600px" class="w-full mt-8" />
</div>
@endsection
