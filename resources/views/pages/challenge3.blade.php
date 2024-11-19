@extends('layouts.contoh')


@section('content')
    @foreach ($namaprodi as $item)
        @if ($item == 'Informatika')
            <p>Selamat Datang</p>
        @else
            <p>{{ $item }}</p>
        @endif
    @endforeach
@endsection
