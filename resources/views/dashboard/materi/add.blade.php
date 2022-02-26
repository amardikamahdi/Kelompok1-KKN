@extends('layouts.app')

@section('title', 'Tambah Materi')

@section('content')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea'
    });

</script>
<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Tambah Materi
        </h2>

        <form action="{{ route('dashboard.materi.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Judul Materi</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Judul Materi" name="name" />
                </label>

                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Kelas
                    </span>
                    <select
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        name="class">
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </label>

                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Tema
                    </span>
                    <select
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        name="theme">
                        <option value="1">Tema 1</option>
                        <option value="2">Tema 2</option>
                        <option value="3">Tema 3</option>
                        <option value="4">Tema 4</option>
                        <option value="5">Tema 5</option>
                        <option value="6">Tema 6</option>
                    </select>
                </label>

                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Mata Pelajaran</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        value="Ilmu Pengetahuan Alam" readonly name="subject" />
                </label>

                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Media Interaktif</span>
                    <input type="file"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        name="file" />
                </label>

                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 mb-4 dark:text-gray-400">Isi Materi</span>
                    <textarea
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        rows="3" placeholder="Isi Materi Disini" name="description"></textarea>
                </label>

                <input
                    class="flex items-center justify-between p-4 mt-8 float-right text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
                    type="submit" value="Simpan">
            </div>
        </form>
    </div>
</main>
@endsection
