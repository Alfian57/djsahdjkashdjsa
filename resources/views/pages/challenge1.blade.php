@extends('layouts.contoh')

@foreach ($mahasiswa as $item)
    @if ($item['status_mahasiswa'])
        <p>Mahasiswa {{ $item['nama'] }} Aktif</p>
    @else
        <p>Mahasiswa {{ $item['nama'] }} Tidak Aktif</p>
    @endif
@endforeach
