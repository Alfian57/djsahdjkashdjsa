@extends('layouts.contoh')

@section('content')
    <form action="/simpan2" method="POST">
        @csrf
        <label for="nama">Masukan Nama</label>
        <input type="text" id="nama" name="nama">

        <label for="email">Masukan Email</label>
        <input type="email" id="email" name="email">

        <label for="alamat">Masukan Alamat</label>
        <input type="text" id="alamat" name="alamat">

        <button type="submit">Simpan</button>
    </form>
@endsection
