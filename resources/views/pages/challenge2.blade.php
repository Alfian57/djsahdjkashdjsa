@extends('layouts.contoh')


@foreach ($mahasiswa as $item)
    <p>{{ $item['nama'] }}</p>
@endforeach
