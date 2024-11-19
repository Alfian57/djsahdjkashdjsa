@extends('layouts.contoh')

@section('content')
    <form action="/simpan" method="POST">
        @csrf
        <label for="nama">Masukan Nama</label>
        <input type="text" id="nama" name="nama">

        <label for="email">Masukan Email</label>
        <input type="email" id="email" name="email">

        <label for="password">Masukan Password</label>
        <input type="password" id="password" name="password">

        <button type="submit">Simpan</button>
    </form>
@endsection
