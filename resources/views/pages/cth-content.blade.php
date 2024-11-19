@extends('layouts.contoh')

@section('content')
    <h1>{{ $nim }}</h1>
    <h1>{{ $nama }}</h1>

    @switch($status)
        @case('Mahasiswa')
            <h3>Anda Seorang {{ $status }}</h3>
        @break

        @case('Dosen')
            <h3>Anda Seorang {{ $status }}</h3>
        @break

        @default
            <h3>Bukan Seorang Dikampus</h3>
    @endswitch

    <ul>
        @for ($i = 0; $i < count($matakuliah); $i++)
            <li>{{ $matakuliah[$i] }}</li>
        @endfor
    </ul>

    <ul>
        @foreach ($matakuliah as $mk)
            <li>{{ $mk }}</li>
        @endforeach
    </ul>
@endsection
