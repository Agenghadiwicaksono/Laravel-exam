@extends('layouts.main')

@section('navbar')
 @php
     $no=1;
 @endphp
    <div class="mt-5 mx-5">
        <a href="/input" class="btn btn-solid-warning">Add Data</a>
    </div>
    {{-- table start --}}
    <div class="flex w-full overflow-x-auto mt-5">
        <table class="table-hover table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                    <th>Hasil</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($exam as $e)
                <tr>
                    <th>{{ $no }}</th>
                    <td>{{ $e->nama }}</td>
                    <td>{{ $e->nilai }}</td>
                    <td>{{ $e->hasil }}</td>
                    <td>
                        <a href="/{{ $e->id }}/edit" class="btn btn-solid-success">Edit</a>
                        <form action="/update/{{ $e->id }}" method="post"  class="btn btn-solid-error" >
                            @csrf
                            @method('delete')
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
                @php
                   $no++;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- table end --}}
@endsection