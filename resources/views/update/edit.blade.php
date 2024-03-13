@extends('layouts.main')

@section('navbar')
    {{-- input start --}}
    <div class="flex flex-col items-center justify-center h-screen bg-cyan-600">
        <div class="w-full max-w-md bg-green-800 rounded-lg shadow-md p-6">
            <h1 class="text-3xl font-semibold text-center">Edit Data</h1>
            <p class="text-sm text-center">Add Your Student data</p>
            <form class="mt-2" action="/update/{{ $exam->id }}" method="POST">
                @csrf
                @method('put')
                <div class="w-full">
                    <label for="name">Name</label>
                    <input class="input input-solid-succes max-w-full" value="{{ $exam->nama }}" name="nama" placeholder="Name" type="text" id="name"/>
                </div>
                <div class="w-full mt-2">
                    <label for="name">Nilai</label>
                    <input class="input input-solid-succes max-w-full" value="{{ $exam->nilai }}" name="nilai" placeholder="Nilai" type="text" id="name"/>
                </div>
                <div class="w-full mt-2">
                    <label for="name">Hasil</label>
                    <input class="input input-solid-succes max-w-full" value="{{ $exam->hasil }}" name="hasil" placeholder="Hasil" type="text" id="name"/>
                </div>
                <div class="mt-5">
                    <button class="btn btn-succes">Edit data</button>
                </div>
            </form>
        </div>
    </div>
    {{-- input end --}}
@endsection