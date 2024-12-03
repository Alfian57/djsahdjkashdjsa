<form action="/save-mobil" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nama" placeholder="Masukan nama">
    <input type="file" name="foto">
    <button type="submit">Submit</button>
</form>

@foreach ($mobil as $item)
    <h1>{{ $item->nama }}</h1>
    <img src="{{ asset('storage/' . $item->foto) }}" alt="" width="200">
    <a href="/delete/mobil/{{ $item->id }}">Hapus</a>
@endforeach
