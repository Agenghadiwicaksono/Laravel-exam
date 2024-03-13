@extends('layouts.main')

@section('navbar')
    {{-- input start --}}
    <div class="flex flex-col items-center justify-center h-screen bg-cyan-600">
        <div class="w-full max-w-md bg-yellow-800 rounded-lg shadow-md p-6">
            <h1 class="text-3xl font-semibold text-center">Add Data</h1>
            <p class="text-sm text-center">Add Your Student data</p>
            <form class="mt-2" action="/store" method="POST">
                @csrf
                <div class="w-full">
                    <label for="name">Name</label>
                    <input class="input input-solid-warning max-w-full" name="nama" placeholder="Name" type="text" id="name"/>
                </div>
                <div class="w-full mt-2">
                    <label for="name">Nilai</label>
                    <input class="input input-solid-warning max-w-full" name="nilai" placeholder="Nilai" type="text" id="name"/>
                </div>
                <div class="w-full mt-2">
                    <label for="name">Hasil</label>
                    <input class="input input-solid-warning max-w-full" name="hasil" placeholder="Hasil" type="text" id="name"/>
                </div>
                <div class="mt-5">
                    <button class="btn btn-warning">Add data</button>
                </div>
            </form>
        </div>
    </div>
    {{-- input end --}}
@endsection